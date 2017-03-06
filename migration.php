<?php

ini_set('display_errors', 'on');
set_time_limit(0);

use Symfony\Component\HttpFoundation\Request;
use Kazist\Service\Document\Document;

define('KAZIST', true);

$loader = require_once __DIR__ . '/vendor/autoload.php';
$sc = include __DIR__ . '/include/container.php';

$request = Request::createFromGlobals();
$sc->register('request', $request);

/* $document = new Document($sc, $request);
  $document_obj = $document->getDocument();
  $sc->set('document', $document_obj);

  $doctrine = $sc->get('doctrine');
 * 
 */
$sql_arr = array();
$new_database = 'socialbi_hlanew';
$old_database = 'socialbi_phpfoxyounet';
$old_table_prefix = 'phpfox_';

$dbhost = 'localhost:3036';
$dbuser = 'socialbi_hlanew';
$dbpass = '<>hlanew<>';

$user_id = (int) $_GET['user_id'];

$conn = mysql_connect($dbhost, $dbuser, $dbpass);


/* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Fetch User xxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
$sql = 'SELECT DISTINCT u.*, ui.email AS inviter_email FROM phpfox_user AS u LEFT JOIN phpfox_user AS ui ON ui.user_id = u.invite_user_id  WHERE u.user_id > ' . $user_id . ' ORDER BY user_id LIMIT 50';
mysql_select_db($old_database);
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die('Could not get data: ' . mysql_error());
}
while ($row = mysql_fetch_assoc($retval)) {
    $users[] = $row;
}

foreach ($users as $key => $user) {

    //$user = mysql_fetch_array($retval, MYSQL_ASSOC);

    if ($user['email'] != '' && $user['user_name'] != '') {

        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Fetch Countries xxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        $sql = 'SELECT * FROM sbc_setup_countries WHERE code=\'' . $user['country_iso'] . '\'';
        mysql_select_db($new_database);
        $retval = mysql_query($sql, $conn);
        if (!$retval) {
            die('Could not get data: ' . mysql_error());
        }
        $country = mysql_fetch_array($retval, MYSQL_ASSOC);

        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Fetch User Fields xxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        $sql = 'SELECT * FROM phpfox_user_field WHERE user_id=' . (int) $user['user_id'] . '';
        mysql_select_db($old_database);
        $retval = mysql_query($sql, $conn);
        if (!$retval) {
            die('Could not get data: ' . mysql_error());
        }
        $user_field = mysql_fetch_array($retval, MYSQL_ASSOC);
        
        /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Fetch User Custom Data xxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
        $sql = 'SELECT * FROM phpfox_user_custom WHERE user_id=' . (int) $user['user_id'] . '';
        mysql_select_db($old_database);
        $retval = mysql_query($sql, $conn);
        if (!$retval) {
            die('Could not get data: ' . mysql_error());
        }
        $user_custom = mysql_fetch_array($retval, MYSQL_ASSOC);

        $user_arr = array();
        $user_arr['id'] = $user['user_id'];
        $user_arr['username'] = $user['user_name'];
        $user_arr['email'] = 'xyz_' . $user['email'];
        $user_arr['name'] = $user['full_name'];
        $user_arr['password'] = $user['password'];
        $user_arr['salt'] = $user['password_salt'];
        $user_arr['country_id'] = $country['id'];
        $user_arr['town'] = $user_field['city_location'];
        $user_arr['phone'] = $user_custom['cf_mobile_phone'];
        $user_arr['inviter_id'] = $user['invite_user_id'];
        $user_arr['is_verified'] = 1;
        $user_arr['published'] = 1;
        $user_arr['gender'] = ($user['gender'] == 1) ? 'male' : 'female';

        $array_keys = array_keys($user_arr);
        $array_values = array_values($user_arr);
        $array_values = array_map('mysql_real_escape_string', $array_values);

        $sql_arr[] = 'INSERT IGNORE INTO #__users_users ' .
                ' (`' . implode('`,`', $array_keys) . '`) ' .
                ' VALUES ( \'' . implode('\',\'', $array_values) . '\' );';
    }
}

$query = new \Kazist\Service\Database\Query();
$query->executeQuery(implode('', $sql_arr));

mysql_close($conn);

$request_scheme = $request->server->get('REQUEST_SCHEME');
$http_host = $request->server->get('HTTP_HOST');
$web_base = $request_scheme . '://' . $http_host . rtrim($request->getBaseUrl(), '/');
$web_root = str_replace(array('index.php', 'index-dev.php'), '', $web_base) . '?user_id=' . $user['user_id'];

echo ' <script type="text/javascript">
                   function Redirect() {
                      window.location="' . $web_root . '";
                   }
                   
                   setTimeout(\'Redirect()\', 5);
            </script>';

echo 'Processing <b>' . $web_root . '</b> complete.';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<ol>';
exit;






<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Subscribers\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\BaseModel;
use Kazist\KazistFactory;
use Notification\Subscribers\Code\Classes\SyncUsers;

/**
 * Description of MarketplaceModel
 *
 * @author sbc
 */
class SubscribersModel extends BaseModel {

    public function syncSyncUsers() {

        $syncusers = new SyncUsers();

        $syncusers->syncRegisteredUsers();
    }

    public function unsubscribeUser() {

        $data_arr = array();
        $where_arr = array();
        $parameter_arr = array();
        $factory = new KazistFactory();

        $email = $this->request->get('email');
        $id = $this->request->get('id');

        if ($id) {
            $data_arr['id'] = $id;
            $where_arr = array('id=:id');
            $parameter_arr = array('id' => $id);
        } elseif ($email <> '') {
            $data_arr['email'] = $email;
            $where_arr = array('email=:email');
            $parameter_arr = array('email' => $email);
        } else {
            $where_arr[] = array('1=-1');
        }

        $data_arr['published'] = 0;

        $factory->saveRecordByEntity('#__notification_subscribers', $data_arr, $where_arr, $parameter_arr);

        return $factory->getRecord('#__notification_subscribers', 'ns', $where_arr, $parameter_arr);
    }

}

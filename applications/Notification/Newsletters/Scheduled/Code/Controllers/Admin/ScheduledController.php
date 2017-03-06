<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of ScheduledController
 *
 * @author sbc
 */

namespace Notification\Newsletters\Scheduled\Code\Controllers\Admin;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;
use Kazist\Model\BaseModel;

class ScheduledController extends BaseController {

    public function editAction() {

        $id = $this->request->get('id');

        $this->model = new BaseModel();

        $item = $this->model->getRecord($id);
        $json_list = $this->model->getDetailedJson();

        $stop_repeating = array();

        for ($x = 1; $x <= 30; $x++) {
            $stop_repeating[] = array('value' => $x, 'text' => 'Stop After  ' . $x . ' Email.');
        }

        $data_arr['item'] = $item;
        $data_arr['stop_repeating'] = $stop_repeating;

        $data_arr['json_object'] = $json_list;
        $data_arr['action_type'] = 'edit';
        $data_arr['show_action'] = true;
        $data_arr['show_messages'] = true;

        $this->html = $this->render('Notification:Newsletters:Scheduled:Code:views:admin:edit.index.twig', $data_arr);

        $response = $this->response($this->html);



        return $response;
    }

}

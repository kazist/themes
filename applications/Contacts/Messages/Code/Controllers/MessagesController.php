<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of MessagesController
 *
 * @author sbc
 */

namespace Contacts\Messages\Code\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;
use Kazist\KazistFactory;

class MessagesController extends BaseController {

    public function indexAction($offset = 0, $limit = 6) {
        return $this->redirectToRoute('contacts.messages.add');
    }

    public function thankyouAction() {
        
        $id = $this->request->get('id');
        
        $message = $this->model->getRecord($id);

        $data_arr['message'] = $message;

        $this->html = $this->render('Contacts:Messages:Code:views:thankyou.index.twig', $data_arr);

        $response = $this->response($this->html);

        return $response;
    }

    public function saveAction($form_data = '') {

        //  $this->return_url = 'contacts.messages.thankyou';

        $factory = new KazistFactory();

        if (empty($form_data)) {
            $form_data = $this->request->get('form');
        }

        $form_data['subject'] = ($form_data['subject'] <> '') ? $form_data['subject'] : 'Contact Message';

        $factory->enqueueMessage('Message Sent Successfully.', 'info');

        $id = $this->model->save($form_data);

        return $this->redirectToRoute('contacts.messages.thankyou', array('id' => $id));
    }

}

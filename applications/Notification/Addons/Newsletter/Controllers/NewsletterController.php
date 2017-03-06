<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Addons\Newsletter\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\AddonController;
use Notification\Addons\Newsletter\Models\NewsletterModel;

/**
 * Kazist view class for the application
 *
 * @since  1.0
 */
class NewsletterController extends AddonController {

    function indexAction($offset = 0, $limit = 6) {

        $model = new NewsletterModel;

        $newsletters = $model->getNewsletters();

        $data_arr['newsletters'] = $newsletters;

        $this->html = $this->render('Notification:Addons:Newsletter:views:newsletter.twig', $data_arr);

        $response = $this->response($this->html);



        return $response;
    }

}

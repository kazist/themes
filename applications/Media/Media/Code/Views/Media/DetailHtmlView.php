<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Media\Media\Views\Media;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazicode\View\Detail\DetailHtmlView as GeneralDetailHtmlView;
use Kazicode\Service\KazistFactory;

/**
 * News HTML view class for the application
 *
 * @since  1.0
 */
class DetailHtmlView extends GeneralDetailHtmlView {

    public function prepare() {
        parent::prepare();

        //print_r($parameters); exit;
        $detail_index = $this->renderer->get('detail_index');
        $detail_index = $this->model->appendAdditionalDetail($detail_index);

        $this->renderer->set('item', $detail_index);
        $this->renderer->set('domain_url', DOMAIN_URL);
    }

}

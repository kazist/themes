<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Media\Media\Views\Media;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazicode\View\Edit\EditHtmlView as GeneralEditHtmlView;
use Kazicode\Service\KazistFactory;

/**
 * News HTML view class for the application
 *
 * @since  1.0
 */
class EditHtmlView extends GeneralEditHtmlView {

    public function prepare() {
        //print_r($parameters); exit;
        parent::prepare();

        $edit_index = $this->renderer->get('edit_index');
        $edit_index = $this->model->appendAdditionalDetail($edit_index);

        $this->renderer->set('item', $edit_index);
        $this->renderer->set('domain_url', DOMAIN_URL);
    }

}

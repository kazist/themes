<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Newsletter\Views\Scheduled;

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

        parent::prepare();

        $stop_repeating = array();

        for ($x = 1; $x <= 30; $x++) {
            $stop_repeating[] = array('value' => $x, 'text' => 'Stop After  ' . $x . ' Email.');
        }

        $this->renderer->set('stop_repeating', $stop_repeating);
    }

}

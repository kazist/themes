<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Newsletter\Views\Newsletter;

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

        $item = $this->renderer->get('edit_index');

        if (!is_object($item)) {
            $body = $this->model->getTemplate();
        } else {
            $body = $item->body;
        }
        $repeated_every = array();
        $repeated_on = array();
        $how_to_repeat_fields = array(
            array('value' => 'daily', 'text' => 'Daily'),
            array('value' => 'weekday', 'text' => 'Weekday'),
            array('value' => 'weekend', 'text' => 'Weekend'),
            array('value' => 'weekly', 'text' => 'Weekly'),
            array('value' => 'monthly', 'text' => 'Monthly'),
            array('value' => 'yearly', 'text' => 'Yearly'),
        );

        for ($x = 1; $x <= 30; $x++) {
            $repeated_every[] = array('value' => $x, 'text' => $x);
        }

        $repeated_on[] = array('value' => '1', 'text' => 'M');
        $repeated_on[] = array('value' => '2', 'text' => 'T');
        $repeated_on[] = array('value' => '3', 'text' => 'W');
        $repeated_on[] = array('value' => '4', 'text' => 'T');
        $repeated_on[] = array('value' => '5', 'text' => 'F');
        $repeated_on[] = array('value' => '6', 'text' => 'S');
        $repeated_on[] = array('value' => '0', 'text' => 'S');


        $this->renderer->set('repeated_on', $repeated_on);
        $this->renderer->set('repeated_every', $repeated_every);
        $this->renderer->set('how_to_repeat_fields', $how_to_repeat_fields);

        $this->renderer->set('body', $body);
    }

}

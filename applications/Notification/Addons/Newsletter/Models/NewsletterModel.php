<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Addons\Newsletter\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\KazistFactory;
use Kazist\Service\Database\Query;

class NewsletterModel {

    public function getInfo() {
        return 'Hello World!';
    }

    public function getNewsletters() {

        $factory = new KazistFactory();
        $db = $factory->getDbo();

        $query = new Query();
        $query->select('nn.*, nt.name as template, ng.name as group_name');
        $query->from('#__notification_newsletters', 'nn');
        $query->leftJoin('nn', '#__notification_templates', 'nt', 'nt.id = nn.template_id');
        $query->leftJoin('nn', '#__notification_groups', 'ng', 'ng.id = nn.group_id');

        $query->setFirstResult(0);
        $query->setMaxResults(10);

        $records = $query->loadObjectList();

        //print_r($records); exit;

        return $records;
    }

}

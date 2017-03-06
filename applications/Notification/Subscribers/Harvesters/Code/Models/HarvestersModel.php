<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Subscribers\Harvesters\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\BaseModel;
use Kazist\KazistFactory;
use Kazist\Service\Email\Email;
use Kazist\Service\System\System;
use Kazist\Service\Database\Query;

/**
 * Description of MarketplaceModel
 *
 * @author sbc
 */
class HarvestersModel extends BaseModel {

//put your code here

    public function emailHarverster() {

        $harvesters = $this->getHarverters();

        if (!empty($harvesters)) {
            foreach ($harvesters as $harvester) {
                $group_id = $this->registerSubscriberGroup($harvester);
                $this->processHarvesterEmails($harvester, $group_id);
            }
        }
    }

    public function processHarvesterEmails($harvester, $group_id) {

        $system = new System();
        $factory = new KazistFactory();

        $app_name = $system->getApplicationNameById($harvester->app_id);
        $com_name = $system->getComponentNameById($harvester->com_id, $harvester->app_id);
        $subset_name = $system->getSubsetNameById($harvester->subset_name, $harvester->com_id);

        $check_arr = array('is_email_harvested' => 0);
        $table_name = $system->getTableName($app_name, $com_name, $subset_name);

        $records = $factory->getRecords($table_name, 'tx', array('is_email_harvested=:is_email_harvested'), $check_arr);

        if (!empty($records)) {
            foreach ($records as $record) {
                $this->saveEmails($record, $group_id, $harvester->user_field, $harvester->email_field);
                $factory->saveRecord($table_name, array('id' => $record->id, 'is_email_harvested' => 1));
            }
        }
    }

    public function saveEmails($record, $group_id, $user_field, $email_field) {

        $factory = new KazistFactory();

        if ($email_field <> '') {
            $email = $record->$email_field;
        } elseif ($user_field <> '') {
            $user_id = $record->$user_field;
            $user = $factory->getQueryBuilder('#__users_users', 'uu', array('id=:id'), array('id' => $user_id));
            $email = $user->email;
        }

        if ($email == '') {
            $user_id = $record->created_by;
            $user = $factory->getQueryBuilder('#__users_users', 'uu', array('id=:id'), array('id' => $user_id));
            $email = $user->email;
        }

        if ((!filter_var($email, FILTER_VALIDATE_EMAIL) === false)) {

            $subscriber = $factory->getRecord('#__notification_subscribers', 'ns', array('email=:email'), array('email' => $email));


            if (!is_object($subscriber)) {
                $data_obj = new \stdClass();
                $data_obj->email = $email;
                $subscriber_id = $factory->saveRecord('#__notification_subscribers', $data_obj, array('email=:email'), $data_obj);
            } else {
                $subscriber_id = $subscriber->id;
            }

            $new_data_obj = new \stdClass();
            $new_data_obj->subscriber_id = $subscriber_id;
            $new_data_obj->group_id = $group_id;


            $where_arr = array();
            $where_arr[] = 'subscriber_id=:subscriber_id';
            $where_arr[] = 'group_id=:group_id';

            $factory->saveRecord('#__notification_groups_subscribers', $new_data_obj, $where_arr, $new_data_obj);
        }
    }

    public function registerSubscriberGroup($harvester) {

        $factory = new KazistFactory();


        $query = new Query();
        $query->select('ng.*');
        $query->from('#__notification_groups', 'ng');
        $query->where('ng.app_id=:app_id');
        $query->andWhere('ng.com_id=:com_id');
        $query->andWhere('ng.subset_id=:subset_id');
        $query->setParameter('app_id', $harvester->app_id);
        $query->setParameter('com_id', $harvester->com_id);
        $query->setParameter('subset_id', $harvester->subset_id);

        $group = $query->loadObject();

        if (!is_object($group)) {
            $data_obj = new \stdClass();
            $data_obj->subset_id = $harvester->subset_id;
            $exist_obj = clone $data_obj;
            $data_obj->title = $harvester->title;
            $data_obj->name = ($harvester->name <> '') ? $harvester->name : $harvester->title;
            $data_obj->description = ($harvester->description <> '') ? $harvester->description : $harvester->title;

            return $factory->saveRecord('#__notification_groups', $data_obj, $exist_obj);
        } else {
            return $group->id;
        }
    }

    public function getHarverters() {

        $factory = new KazistFactory();
        //TODO
        $query = new Query();
        $query->select('nsh.*');
        $query->from('#__notification_subscribers_harvesters', 'nsh');
        $query->where('1=1');
        $query->orWhere('((nsh.email_field = \'\' OR  nsh.email_field IS NULL) AND nsh.user_field <> \'\')');
        $query->orWhere('((nsh.user_field = \'\' OR nsh.user_field IS NULL) AND nsh.email_field <> \'\')');
        $query->orWhere('(nsh.user_field <> \'\' AND nsh.email_field <> \'\')');

        $records = $query->loadObjectList();

        return $records;
    }

}

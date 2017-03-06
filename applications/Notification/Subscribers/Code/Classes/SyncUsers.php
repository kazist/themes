<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Subscribers\Code\Classes;

/**
 * Description of Member
 *
 * @author sbc
 */
use Kazist\KazistFactory;
use Kazist\Service\Email\Email;
use Subscriptions\Subscriptions\Code\Classes\Subscriber;
use Kazist\Service\Database\Query;

class SyncUsers {

    public function syncRegisteredUsers() {

        // Update Subscription
        $this->syncSubscriptionList();
    }

    public function syncSubscriptionList() {

        $users = $this->getUnRegisteredUser();

        if (!empty($users)) {
            foreach ($users as $user) {
                $this->syncRegisteredUser($user);
            }
        }
    }

    public function syncRegisteredUser($user) {

        $factory = new KazistFactory();

        $group_id = $factory->getSetting('notification_subscribers_default_group');

        $exist_obj = new \stdClass();
        $exist_obj->email = $user->email;
        $user->published = 1;

        $subscriber_id = $factory->saveRecordByEntity('#__notification_subscribers', $user, array('email=:email'), $exist_obj);

        $data_obj = new \stdClass();
        $data_obj->subscriber_id = $subscriber_id;
        $data_obj->group_id = $group_id;

        $factory->saveRecordByEntity('#__notification_groups_subscribers', $data_obj, array('subscriber_id=:subscriber_id'), $data_obj);
    }

    public function getUnRegisteredUser() {

        $factory = new KazistFactory();

        $group_id = $factory->getSetting('notification_subscribers_default_group');

        $query = new Query();
        $query->select('DISTINCT uu.email, uu.name, uu.id AS user_id');
        $query->from('#__users_users', 'uu');
        $query->leftJoin('uu', '#__notification_subscribers', 'ns', 'ns.user_id = uu.id');
        $query->leftJoin('ns', '#__notification_groups_subscribers', 'ngs', 'ngs.subscriber_id = ns.id AND ngs.group_id=' . $group_id);
        $query->where('ngs.id IS NULL');
        $query->orderBy('uu.email');

        $records = $query->loadObjectList();

        return $records;
    }

}

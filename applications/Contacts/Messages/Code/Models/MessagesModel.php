<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

namespace Contacts\Messages\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\BaseModel;
use Kazist\KazistFactory;
use Kazist\Service\Email\Email;
use Search\Indexes\Code\Classes\ContentIndexing;
use Kazist\Service\Database\Query;

/**
 * Description of MarketplaceModel
 *
 * @author sbc
 */
class MessagesModel extends BaseModel {

    public function save($form = '') {

        $id = parent::save($form);

        if ($id) {

            $message = parent::getRecord($id);

            $this->sendEmailToAdmin($form, $message, $id);
            $this->sendEmailToContacts($form, $message, $id);

            if ($form['send_copy']) {
                $this->sendEmailToSelf($form, $message, $id);
            }
        }

        return $id;
    }

    public function sendEmailToContacts($form, $message, $id) {
        $email = new Email();
        $factory = new KazistFactory();

        if ($id && !$form['id']) {

            $message = ($message != '') ? $message : parent::getRecord($id);

            $members = $factory->getRecords('#__contacts_contacts', 'cc', array('category_id=:category_id'), array('category_id' => (int) $message->category_id));

            if (empty($members)) {
                $members = $factory->getRecords('#__contacts_contacts', 'cc', array('published=1'));
            }

            foreach ($members as $member) {

                $parameters = array();
                $parameters['user'] = $member;
                $parameters['message'] = $message;

                $email->sendDefinedLayoutEmail('contacts.messages.added', $member->email, $parameters);
            }
        }
    }

    public function sendEmailToSelf($form, $message, $id) {
        $email = new Email();
        $factory = new KazistFactory();

        if ($id && !$form['id']) {

            $message = ($message != '') ? $message : parent::getRecord($id);

            $parameters = array();
            $parameters['user'] = $message;
            $parameters['message'] = $message;

            $email->sendDefinedLayoutEmail('contacts.messages.added', $message->email, $parameters);
        }
    }

    public function sendEmailToAdmin($form, $message, $id) {

        $email = new Email();
        $factory = new KazistFactory();

        if ($id && !$form['id']) {

            $message = ($message != '') ? $message : parent::getRecord($id);

            $member_query = $factory->getQueryBuilder('#__users_users', 'uu', array('is_admin=1'));
            $members = $member_query->loadObjectList();

            foreach ($members as $member) {

                $parameters = array();
                $parameters['user'] = $member;
                $parameters['message'] = $message;

                $email->sendDefinedLayoutEmail('contacts.messages.added', $member->email, $parameters);
            }
        }
    }

    public function getContactCategories() {

        $factory = new KazistFactory();

        $category_query = $factory->getQueryBuilder('#__contacts_categories', 'cc', array('published=1'));
        $categories = $category_query->loadObjectList();

        return $categories;
    }

}

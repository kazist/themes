<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Notification\Comments\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\ BaseModel;
use Kazist\KazistFactory;
use Kazist\Service\Session\Session;
use Kazist\Service\Media\MediaManager;
use Kazist\Service\System\System;
use Kazist\Service\Database\Query;

/**
 * Model to get data for the issue list view
 *
 * @since  1.0
 */
class CommentsModel extends BaseModel {

    public function saveComment() {

        $factory = new KazistFactory();
        $mediamanager = new MediaManager();
        $system = new System();

        $subset_id = $system->getSubsetId('notification/comments');
        $attachments = $this->request->get('attachments');

        $tmpobject = new \stdClass();
        $tmpobject->id = $this->request->get('comment_id');
        $tmpobject->record_id = $this->request->get('record_id');
        $tmpobject->parent_id = $this->request->get('parent_id');
        $tmpobject->subset_id = $this->request->get('subset_id');
        $tmpobject->comment = $this->request->get('comment');

        $factory->saveRecordByEntity('#__notification_comments', $tmpobject);

        $mediamanager->saveMediaUsage($tmpobject->id, $attachments, $subset_id);

        $tmparray = $this->getAllComments($tmpobject->subset_id, $tmpobject->record_id);

        return $tmparray;
    }

    public function fetchComment() {

        $factory = new KazistFactory();

        $subset_id = $this->request->get('subset_id');
        $record_id = $this->request->get('record_id');

        $tmp_records = $this->getAllComments($subset_id, $record_id);

        return $tmp_records;
    }

    public function deleteComment() {

        $id = $this->request->get('comment_id');
        $subset_id = $this->request->get('subset_id');
        $record_id = $this->request->get('record_id');

        if ($id) {
            $query = new Query();
            $query->delete('#__notification_comments');
            $query->where('id=:id');
            $query->orWhere('parent_id=:id');
            $query->setParameter('id', $id);
            $query->execute();
        }

        $tmparray = $this->getAllComments($subset_id, $record_id);

        return $tmparray;
    }

    public function getAllComments($subset_id, $record_id, $parent_id = '') {

        $query = new Query();
        $query->select('nc.*, uu.name as user_full_name,mm.file as avatar');
        $query->from('#__notification_comments', 'nc');
        $query->leftJoin('nc', '#__users_users', 'uu', 'nc.created_by = uu.id');
        $query->leftJoin('nc', '#__media_media', 'mm', 'uu.avatar = mm.id');
        $query->where('nc.subset_id=:subset_id');
        $query->andWhere('nc.record_id=:record_id');
        $query->setParameter('subset_id', $subset_id);
        $query->setParameter('record_id', $record_id);
        if ($parent_id) {
            $query->andWhere('nc.parent_id=:parent_id');
            $query->setParameter('parent_id', $parent_id);
            $query->orderBy('id', 'ASC');
        } else {
            $query->andWhere('nc.parent_id=0 OR nc.parent_id IS NULL');
            $query->orderBy('id', 'DESC');
        }

        $records = $query->loadObjectList();
        
        if (!empty($records)) {
            foreach ($records as $key => $record) {
                $records[$key]->avatar = ($record->avatar != '') ? $record->avatar : WEB_ROOT . 'assets/images/users/users/avatar.png';
                $records[$key]->date_created = date('d M Y H:i A', strtotime($record->date_created));
                $records[$key]->date_modified = date('d M Y H:i A', strtotime($record->date_modified));
                $records[$key]->attachments = $this->getAttachments($record->id);

                $records[$key]->children = $this->getAllComments($subset_id, $record_id, $record->id);
            }
        }

        if ($parent_id == '') {
            $tmpobject = new \stdClass();
            if (!empty($records)) {
                $tmpobject->successful = true;
                $tmpobject->comments = $records;
            } else {
                $tmpobject->successful = false;
            }
            return json_encode($tmpobject);
        }

        return $records;
    }

    public function getAttachments($id) {
        $system = new System();
        $mediamanager = new MediaManager();

        $subset_id = $system->getSubsetId('notification/comments');

        $query = new Query();
        $query->select('mm.*');
        $query->from('#__media_usage', 'mu');
        $query->leftJoin('mu', '#__media_media', 'mm', 'mu.media_id = mm.id');
        $query->where('mu.subset_id=:subset_id');
        $query->andWhere('mu.record_id=:id');
        $query->setParameter('subset_id', $subset_id);
        $query->setParameter('id', $id);

        //  print_r((string)$query); exit;

        $records = $query->loadObjectList();

        if (!empty($records)) {
            foreach ($records as $key => $record) {
                $records[$key]->file_icon = $mediamanager->getFileImage($record->file);
            }
        }

        return $records;
    }

}

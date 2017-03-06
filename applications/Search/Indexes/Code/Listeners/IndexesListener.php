<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

namespace Search\Indexes\Code\Listeners;

defined('KAZIST') or exit('Not Kazist Framework');

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Kazist\Event\CRUDEvent;
use Kazist\Service\Database\Query;
use Search\Indexes\Code\Classes\ContentIndexing;

/**
 * Some of Events to be fired
 * - user.before.registration
 * - user.after.registration
 * - user.before.login
 * - user.after.login
 * - user.before.save
 * - user.after.save
 * - user.before.delete
 * - user.after.delete
 * 
 */
class IndexesListener implements EventSubscriberInterface {

    public $container = '';

    public function onRecordAferSave(CRUDEvent $event) {
        global $sc;

        $this->container = $sc;

        $content_indexing = new ContentIndexing();
        $subset_content = $event->getRecord();
        $extension_path = $this->container->get('document')->extension_path;

        $table_name = str_replace('/', '_', strtolower($extension_path));

        $content_indexing->indexSingleContent($table_name, $subset_content);
    }

    public function onRecordAferUpdate(CRUDEvent $event) {
        global $sc;

        $this->container = $sc;

        $content_indexing = new ContentIndexing();
        $subset_content = $event->getRecord();
        $extension_path = $this->container->get('document')->extension_path;

        $table_name = str_replace('/', '_', strtolower($extension_path));

        $content_indexing->indexSingleContent($table_name, $subset_content);
    }

    public function onRecordAferDelete(CRUDEvent $event) {
        global $sc;

        $this->container = $sc;

        $content_indexing = new ContentIndexing();
        $subset_content = $event->getRecord();
        $extension_path = $this->container->get('document')->extension_path;

        $table_name = str_replace('/', '_', strtolower($extension_path));

        $content_indexing->deleteSingleContent($table_name, $subset_content);
    }

    public static function getSubscribedEvents() {

        $tmp_array = array();

        $query = new Query();
        $query->select('*');
        $query->from('#__search_subsets');
        $query->where('published=1');
        $records = $query->loadObjectList();

        foreach ($records as $key => $record) {
            $event = str_replace('_', '.', $record->table_name);
            $tmp_array[$event . '.after.save'] = 'onRecordAferSave';
            $tmp_array[$event . '.after.update'] = 'onRecordAferUpdate';
            $tmp_array[$event . '.after.delete'] = 'onRecordAferDelete';
        }

        return $tmp_array;
    }

}

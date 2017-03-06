<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Search\Indexes\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\BaseModel;
use Kazist\KazistFactory;
use Kazist\Service\System\System;
use Search\Indexes\Code\Classes\ContentIndexing;
use Kazist\Service\Database\Query;

/**
 * Description of QuestionModel
 *
 * @author sbc
 */
class IndexesModel extends BaseModel {

    //put your code here
    public function appendSearchQuery($query) {

        $search_phrase = $this->getSearchPhrase();
        $search_filter = $this->getSearchFilter();

        if ($search_phrase) {
            $query->andWhere('si.title LIKE \'%' . $search_phrase . '%\' OR si.description LIKE \'%' . $search_phrase . '%\'');
            $query->leftJoin('si', '#__search_subsets', 'ssub', 'ssub.subset_id = si.subset_id');
            $query->addSelect('ssub.title as search_subset_title');
        }

        if ($search_filter && $search_filter <> 'all') {
            $query->andWhere('ss.alias = \'' . $search_filter . '\'');
        }


        return $query;
    }

    public function getParams() {
        $factory = new KazistFactory();


        $query = new Query();
        $query->select('ss.*');
        $query->from('#__search_subsets', 'ss');
        $query->where('ss.published=1');

        $records = $query->loadObjectList();

        return $records;
    }

    public function getSearchPhrase() {

        $session = $this->container->get('session');

        $session_search_phrase = $session->get('search_phrase');
        $search_phrase = $this->request->get('search_phrase');

        if ($search_phrase == '') {
            $search_phrase = $session_search_phrase;
        }

        $search_phrase = trim($search_phrase);
        $session->set('search_phrase', $search_phrase);

        return $search_phrase;
    }

    public function getSearchFilter() {

        $session = $this->container->get('session');

        $session_search_filter = $session->get('search_filter');
        $search_filter = $this->request->get('search_filter');

        if ($search_filter == '') {
            $search_filter = $session_search_filter;
        }

        $search_filter = trim($search_filter);
        $session->set('search_filter', $search_filter);

        return $search_filter;
    }

    function getSubsetById($id) {

        $query = new Query();
        $query->select('*');
        $query->from('#__search_subsets');
        $query->where('id=:id');
        $query->setParameter('id', $id);
        $record = $query->loadObject();

        return $record;
    }

    function getRecordById($id, $table_name) {

        $factory = new KazistFactory();

        $table_alias = $factory->getTableAlias($table_name);
        $record = $factory->getRecord($table_name, $table_alias, array('id=:id'), array('id' => $id));

        return $record;
    }

    public function contentIndexing() {
        $content_indexing = new ContentIndexing();
        $content_indexing->processIndexing();
    }

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Search\Subsets\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\ BaseModel;
use Kazist\KazistFactory;
use Kazist\Service\Database\Query;

/**
 * Description of QuestionModel 
 *
 * @author sbc
 */
class SubsetsModel extends BaseModel {

    public function getSubsetTables() {

        $factory = new KazistFactory();
        $db = $factory->getDatabase();

        $query = new Query();
        $query->select('ss.*');
        $query->from('#__search_subsets', 'ss');
        $query->where('ss.published = 1');
        $query->orderBy('ss.id ', 'DESC');

        $records = $query->loadObjectList();

        return $records;
    }

}

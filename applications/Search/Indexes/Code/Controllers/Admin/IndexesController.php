<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of IndexesController
 *
 * @author sbc
 */

namespace Search\Indexes\Code\Controllers\Admin;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;

class IndexesController extends BaseController {

    public function indexAction() {

        $items = $this->model->getRecords();
        $items = $this->model->getAdditionalDetail($items);
        $search_phrase = $this->model->getSearchPhrase();

        $data_arr['items'] = $items;
        $data_arr['search_phrase'] = $search_phrase;

        $this->html = $this->render('Search:Indexes:Code:views:admin:table.index.twig', $data_arr);

        $response = $this->response($this->html);



        return $response;
    }

}

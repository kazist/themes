<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of MediaController
 *
 * @author sbc
 */

namespace Media\Media\Code\Controllers\Admin;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;
use Media\Media\Code\Models\MediaModel;

class MediaController extends BaseController {

    public function editAction() {

        $this->model = new MediaModel();

        $item = $this->model->getRecord();
        $item = $this->model->appendAdditionalDetail($item);

        $data_arr['item'] = $item;
        $data_arr['domain_url'] = DOMAIN_URL;

        $this->html = $this->render('Media:Media:Code:views:admin:edit.index.twig', $data_arr);

        $response = $this->response($this->html);



        return $response;
    }

}

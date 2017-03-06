<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of CommentsController
 *
 * @author sbc
 */

namespace Notification\Comments\Code\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;
use Notification\Comments\Code\Models\CommentsModel;

class CommentsController extends BaseController {

    public function savecommentAction() {

        $commentModel = new CommentsModel();
        $message = $commentModel->saveComment();
        echo $message;
        exit;
    }

    public function fetchcommentAction() {

        $commentModel = new CommentsModel();
        $comments = $commentModel->fetchComment();
        echo $comments;
        exit;
    }

    public function deletecommentAction() {

        $commentModel = new CommentsModel();
        $message = $commentModel->deleteComment();
        echo $message;
        exit;
    }

}

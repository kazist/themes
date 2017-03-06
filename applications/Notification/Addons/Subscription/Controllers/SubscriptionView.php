<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

    namespace Notification\Addons\Subscription\Controllers;    
    

use Kazist\Controller\AddonController;
    use Notification\Addons\Subscription\Models\SubscriptionModel;    
     
/**
* Kazicode view class for the application
*
* @since  1.0
*/
class SubscriptionView extends AddonController {

function indexAction() {

$model = new SubscriptionModel;
$info = $model->getInfo();


}

}

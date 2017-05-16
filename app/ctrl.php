<?php
require_once dirname(__FILE__) . '/../init.php';

switch ($action) {
    default : // 'home'
        include_once getConf()->root_path . '/app/home/HomeCtrl.class.php';
        $ctrl = new HomeCtrl();
        $ctrl->process();
        break;

    case '' :
        //TODO
        break;
}
?>
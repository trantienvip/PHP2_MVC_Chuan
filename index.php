<?php

$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once('./vendor/autoload.php');
use App\Controllers\HomeController;
use App\Controllers\UserController;

switch ($url){
    case '/':
        $ctrl = new HomeController();
        echo $ctrl->index();
        break;
    case 'user':
        $ctrl = new UserController();
        echo $ctrl->index();
        break;

    default:
     break;
}

?>

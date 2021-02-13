<?php
    require_once dirname(__DIR__) . "\wp_index\View\header.php";

    
    require_once  dirname(__DIR__) . "\wp_index\Controller\controller.php";
    $controller = new Controller();
    $controller->index();

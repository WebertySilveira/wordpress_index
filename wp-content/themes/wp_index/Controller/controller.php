<?php
    require_once dirname(__DIR__) . "\Model\products.php";
    require_once dirname(__DIR__) . "\Model\comments.php";

    class Controller extends Products{
        public $products;
        public $comments;

        public function __construct(){
            $this->products = new Products();
            $this->comments = new Comments();
        }

        public function index(){
            require_once dirname(__DIR__) . "\View\home.php";
        }
    }
<?php
    require_once dirname(__DIR__) . "\Model\products.php";

    class Controller extends Products{
        public $products;

        public function __construct(){
            $this->products = new Products();
        }

        public function index(){
            require_once dirname(__DIR__) . "\View\home.php";
        }

        public function product($id){
            
        }

    }
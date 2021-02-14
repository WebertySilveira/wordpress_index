<?php

    require_once dirname(__DIR__) . "\Model\connection.php";

    class Products extends Connection{
        public $conn;

        public function __construct(){
            try {
                $this->conn = Connection::Connect();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function readProducts(){
            try {
                $conn = $this->conn->query("SELECT * FROM wp_products");
                return $conn;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }

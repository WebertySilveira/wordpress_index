<?php

    class Connection{
        public function Connect(){
            try {
                $conn = new PDO('mysql:host=localhost;dbname=wp_index', 'root', '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }
    }

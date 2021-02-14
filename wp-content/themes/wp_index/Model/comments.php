<?php

    require_once dirname(__DIR__) . "\Model\connection.php";

    class Comments extends Connection{
        public $conn;

        public function __construct(){
            try {
                $this->conn = Connection::Connect();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function saveComment($id, $author, $comment){
            try {
                $conn = $this->conn->prepare(
                    "INSERT INTO wp_comments (comment_post_ID, comment_author, comment_content)
                     VALUES (:id, :author, :comment)"
                );
                
                $conn->execute(array(
                    ':id' => $id,
                    ':author' => $author,
                    ':comment' => $comment
                ));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function readComment($id){
            try {
                $conn = $this->conn->query("SELECT comment_post_ID, comment_author, comment_content FROM wp_comments WHERE comment_post_ID = $id ");
                
                return $conn;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }

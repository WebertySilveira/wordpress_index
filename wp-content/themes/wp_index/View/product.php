<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/Resources/css/product.css">
</head>


<div id="openModal" class="modal">

    <div class="product">
        <a href="#close" title="Close" class="close">X</a>
        
            <div class="card-img">
                <img src="http://localhost/wordpress_index/wp-content/uploads/2021/02/<?= $_GET['id'] ?>.png">
            </div>

            <div class="card-title">
                <h2><?= $_GET['title']; ?></h2>
            </div>


            <div class="form" action="#">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="NOME" required>
                    <input type="text" name="comment" placeholder="COMENTARIO" required>
                    <button>ENVIAR</button>
                </form>
            </div>

            <?php 
                $id = $_GET['id'];
                $author = $_POST['name'];
                $comment = $_POST['comment'];

                if (isset($_POST['name'])) {
                    $this->comments->saveComment($id, $author, $comment); 
                }

                foreach ($this->comments->readComment($id) as $key => $value) {
            ?>
                

            <div class="comment">
                <h3>
                    <?= $value['comment_author'];?>
                </h3>
                <p>
                    <?= $value['comment_content'];?>
                </p>
            </div>

        <?php }
        ?>
    </div>
</div>

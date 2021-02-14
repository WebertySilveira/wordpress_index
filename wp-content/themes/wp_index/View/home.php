<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/Resources/css/home.css">
</head>
<body>

    <section class="products">
        <?php foreach ($this->products->readProducts() as $key => $value) { ?>

        <div class="card">
            <div class="card-img">
                <img src="http://localhost/wordpress_index/wp-content/uploads/2021/02/<?= $value['id'] ?>.png">
            </div>

            <form action="product.php" method="get">  
                <div class="card-info">
                    <div class="card-title">
                        <h2><?= $value['title']; ?></h2>
                    </div>

                    <div class="card-button">
                        <a class="button" href="product.php?id=<?= $value['id'] . "&title=" . $value['title'] ?>#openModal">Ver mais</a>
                    </div>
                </div> 
            </form>  

        </div>

        <?php
            if (isset($_GET['id'])) {
                require_once dirname(__DIR__) . "\View\product.php"; 
            }

        }
        ?>
    </section>


    <?php require_once dirname(__DIR__) . "\View\\footer.php"; ?>
</body>
</html>
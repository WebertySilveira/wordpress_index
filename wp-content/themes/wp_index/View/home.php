<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        h1{
            color:white;
        }
        .products {
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:row;
            flex-wrap:wrap;
            max-width:100%;
            max-height:50vh;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
        .card{
            max-width:50%;
            max-height:50vh;
            margin: 20px;
            border:solid black 1px;
            text-align: center;
            font-size: 1.5em;
        }
        .card-img>img{
            border:solid black 1px;
            max-width:100%;
            max-height:30vh;
        }
        .card-action > button{
            background-color: #5CBF2A;
            border-radius: 10px;
            width: 100px;
            height: 30px;
            margin: 15px;
        }

        @media only screen and (max-width: 600px) {
        .footer{
            display:none;
            
        }
    }

    </style>
    
</head>
<body>
    
    <section class="products">

        <?php
            foreach ($this->products->readProducts() as $key => $value) {
        ?>

        <div class="card">
            <div class="card-img">
                <img src="http://localhost/wordpress_index/wp-content/uploads/2021/02/<?= $value['id'] ?>.png">
            </div>

                
            <div class="card-info">
                <div class="card-title">
                    <h2><?= $value['title']; ?></h2>
                </div>
                        
                <div class="card-action">
                    <button>Ver mais</button>
                </div>
            </div>    
        </div>

        <?php } ?>
        
        <?php require_once dirname(__DIR__) . "\View\\footer.php"; ?>
    </section>
</body>
</html>
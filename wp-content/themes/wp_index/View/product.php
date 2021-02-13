<style>
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: rgba(0,0,0,0.8);
        z-index: 2;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }
    .modal:target {
        opacity: 1;
        pointer-events: auto;
    }
    .modal > div {
        width: 400px;
        position: relative;
        margin: 10% auto;
        padding: 15px 20px;
        background: #fff;
    }
    .close > a{
        width:50px;
    }
    .close {
        position:absolute;
        top:0;
        left:0;
        width: 30px;
        margin:10px 10px;
        text-align: center;
        line-height: 30px;
        border-radius: 10px;
        font-size: 1.5rem;
        color: red;
    }

    .product{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
</style>


<div id="openModal" class="modal">

    <div class="product">
        <a href="#close" title="Close" class="close">X</a>
        <br>
        <br>
        
        <div class="card-img">
            <img src="http://localhost/wordpress_index/wp-content/uploads/2021/02/<?= $_GET['id'] ?>.png">
        </div>

        <div class="card-title">
            <h2><?= $_GET['title']; ?></h2>
        </div>
    </div>
</div>
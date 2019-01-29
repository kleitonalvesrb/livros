 <?php
    require_once "controller/Livro.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    </head>

    <style type="text/css">
        body {
            color: #fff;
            background: #d47677;
        }


    </style>
</head>
<body>
<div class="container mt-5">
    <div class="title">
        <h3>Images</h3>
    </div>

    <div class="row">
        <?php
            $livros = new Livro();
            echo $livros->listaTodosLivros();
        ?>
<!--        <div class="col-md-3">-->
<!--            <h4>Rounded Image</h4>-->
<!--            <img src="imagens/livros.jpeg" alt="Rounded Image" class="rounded img-fluid">-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3">-->
<!--            <h4>Rounded Image</h4>-->
<!--            <img src="imagens/livros.jpeg" alt="Rounded Image" class="rounded img-fluid">-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3">-->
<!--            <h4>Rounded Image</h4>-->
<!--            <img src="imagens/livros.jpeg" alt="Rounded Image" class="rounded img-fluid">-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3">-->
<!--            <h4>Rounded Image</h4>-->
<!--            <img src="imagens/livros.jpeg" alt="Rounded Image" class="rounded img-fluid">-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3">-->
<!--            <h4>Rounded Image</h4>-->
<!--            <img src="imagens/livros.jpeg" alt="Rounded Image" class="rounded img-fluid">-->
<!--        </div>-->
<!--    </div>-->

</div>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: kleitonbatista
 * Date: 29/01/19
 * Time: 20:14
 */

session_start();

require_once "controller/Livro.php";

?>
<!DOCTYPE html>
<html lang="PT">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        li {
            /*list-style-type: none;*/
            padding-top: 10px;
            font-size: 20px;
        }
    </style>
</head>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="listaLivros.php">Esse eu já lí!</a>
    <!-- Navbar Search -->
    <form id="logout" method="post" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <input type="hidden" id="acao" name="acao" value="logout">
    </form>
    <li><?php echo $_SESSION['usuario']['nome']?></li>
    <li onclick="logout();"><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
</nav>
<p>
<body>
<?php
        $livros = new Livro();
        $dadosLivro  = $livros->recuperaLivroId($_GET['livro']);
        $mediaAvaliacao = $livros->recuperaMediaAvaliacaoLivro($_GET['livro']);
?>
<div class="container mt-5">
    <div class="title">
        <h3><?=$dadosLivro['nomelivro']?></h3>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php echo "<img src='imagens/{$dadosLivro['capa']}' class='rounded img-fluid'>"?>
        </div>

        <div class="col-md-6">
            <ul>
                <li>
                    ISBN: <?=$dadosLivro['isbn'];?>
                </li>
                <li>
                    Nome: <?=$dadosLivro['nomelivro'];?>
                </li>
                <li>
                    Editora: <?=$dadosLivro['editora'];?>
                </li>
                <li>
                    Autor: <?=$dadosLivro['autorlivro'];?>
                </li>
                <li>
                    Genero: <?=$dadosLivro['genero'];?>
                </li>
                <li>
                    Paginas: <?=$dadosLivro['paginas'];?>
                </li>
                <li>
                    Avaliacao: <?= number_format($mediaAvaliacao,2);?>
                </li>
            </ul>
        </div>
    </div>
    <div class="row" style="padding-top: 15px;">
        <a href="/livros/listaLivros.php"><button type="submit" class="btn btn-primary">Voltar</button> </a>
    </div>
</body>
<!--<div class="">-->
<!--    <div class="title">-->
<!--    </div>-->
<!--    <div class="row">-->
<!--    </div>-->
<!--        --><?php
//
////        echo "<h3>{$dadosLivro['nomelivro']}</h3>";
////        echo $livros->listaTodosLivros($_GET);
//        ?>
<!--        <h3 class="text-center">--><?//=$dadosLivro['nomelivro']?><!--</h3>-->
<!--        <div class="">-->
<!---->
<!--                <div class="col-md-3">-->
<!--                    <img src="imagens/3096.jpg" class='rounded img-fluid'>-->
<!--                </div>-->
<!---->
<!--                <div>-->
<!--                    ola mundo-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</html>

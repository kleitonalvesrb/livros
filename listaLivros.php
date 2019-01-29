 <?php
 if(isset($_REQUEST['acao'])){
    session_unset();
    session_destroy();
//    header("Location: http://".$_SERVER['HTTP_HOST']."");
     echo "<script>window.location.href = 'http://localhost:8888/livros/index.php';</script>";
    die;

 }
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
            list-style-type: none;
            padding-right: 10px;
        }
    </style>
</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="listaLivros.php">Esse eu já lí!</a>
    <!-- Navbar Search -->
    <form id="logout" method="post" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <input type="hidden" id="acao" name="acao" value="logout">
    </form>
    <li><?php echo $_SESSION['usuario']['nome']?></li>
    <li onclick="logout();"><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
</nav>
</body>
<p>
<body>
<div class="container mt-5">
    <div class="title">
        <h3>Images</h3>
    </div>
    <form method="get">
        <input type="text" class="col-md-4" name="pesquisar">
        <input type="submit" value="Pesquisar" class="btn btn-primary">
    </form>
    <div class="row">
        <?php
        $livros = new Livro();
        echo $livros->listaTodosLivros($_GET);
        ?>


    </div>
</body>
</html>
 <script>
     function logout(){
        $("#logout").submit();
     }
 </script>
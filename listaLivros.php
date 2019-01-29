<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Livros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            color: #fff;
            background: #d47677;
        }
    /*sobr*/
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-offset-5">
            <h1>Livros</h1>
        </div>
    </div>
    <?php
    require_once "controller/Livro.php";
    $livro = new Livro();
    echo $livro->listaTodosLivros();
    ?>
</div>
</body>
</html>

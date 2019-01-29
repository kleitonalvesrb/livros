<?php
/**
 * Created by PhpStorm.
 * User: kleitonbatista
 * Date: 29/01/19
 * Time: 14:16
 */
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require "./conn/Conexao.php";
class Livro
{
    public function __construct()
    {
    }
    public function listaTodosLivros(){
        $conexao = new Conexao();
        $conn = $conexao->getConnection();
        $stmt = $conn->prepare("select * from livro");
        if(!$stmt->execute()){
            echo '<pre> erro: ';
            print_r($stmt->errorInfo());
            exit;
        }
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo $linha->idlivro . " - ";
            echo $linha->nomelivro . " - ";
            echo $linha->isbn . "<br>";
        }

    }
}
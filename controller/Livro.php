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

//sobe
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
        $html = "";
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
            $html .= "<div class='col-md-3'>
            <h5 style='padding-top: 10px;'>{$linha->nomelivro}</h5>
            <img src='imagens/{$linha->capa}' alt='{$linha->nomelivro}' class='rounded img-fluid' >
            </div>";
        }
        return $html;

    }
}
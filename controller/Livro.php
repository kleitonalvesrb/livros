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

    /**
     * @param $id
     * @return array|mixed
     */
    public function recuperaLivroId($id){
        $sql = "select * from livro where idlivro = {$id}";
        $conexao = new Conexao();
        $con = $conexao->getConnection();
        $stmt = $con->prepare($sql);
        $livro = array();
        if($stmt->execute()){
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $livro = $row;
            }
        }
        return $livro;
    }

    /**
     * @param $id
     * @return float|int
     */
    public function recuperaMediaAvaliacaoLivro($id){
        $sql = "select sum(nota) as soma, count(*) as qtd from livros_lidos where livro_idlivro = {$id}";
        $conexao = new Conexao();
        $con = $conexao->getConnection();
        $stmt = $con->prepare($sql);
        $soma = 0;
        $qtd = 0;
        if($stmt->execute()){
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
             $soma = $row->soma;
             $qtd = $row->qtd;
            }
        }

        return $soma == 0 ? 0 : $soma / $qtd;
    }
    public function listaTodosLivros($dados = array()){
        $sql = "Select * from livro";
        if (isset($dados['pesquisar'])){
            $pesquisa = $dados['pesquisar'];
            $sql = "select * from livro where nomelivro like '%{$pesquisa}%'";
        }
        $conexao = new Conexao();
        $conn = $conexao->getConnection();
        $stmt = $conn->prepare($sql);
        if(!$stmt->execute()){
            echo '<pre> erro: ';
            print_r($stmt->errorInfo());
            exit;
        }
        $html = "";
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
            $html .= "<div class='col-md-3'>
            <h5 style='padding-top: 10px;'>{$linha->nomelivro}</h5>
            <a href='/livros/detalharlivro.php?livro={$linha->idlivro}'><img src='imagens/{$linha->capa}' alt='{$linha->nomelivro}' class='rounded img-fluid' ></a>
            </div>";
        }
        return $html;

    }
}
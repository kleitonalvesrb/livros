<?php
/**
 * Created by PhpStorm.
 * User: kleitonbatista
 * Date: 28/01/19
 * Time: 21:42
 */
//namespace mode;
require_once "./conn/Conexao.php";
class Usuario
{

    function Usuario(){
    }
    public function listar(){
        $conn = new Conexao();
        $conn->listaTodos("usuario");
    }
}
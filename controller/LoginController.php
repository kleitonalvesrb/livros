<?php
/**
 * Created by PhpStorm.
 * User: kleitonbatista
 * Date: 29/01/19
 * Time: 12:42
 */
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require "./conn/Conexao.php";
class LoginController
{
    function LoginController()
    {

    }

    private function iniciaSessao($idUsuario,$nomeusuario){
        session_start();
        $_SESSION['usuario']['idusuario'] = $idUsuario;
        $_SESSION['usuario']['nome'] = $nomeusuario;
    }
    /**
     * @param array $dados
     */
    function realizarLogin($dados = array())
    {
        $login = $dados['username'];
        $senha = $dados['password'];
        $retorno = false;
        $conexao = new Conexao();
        $con = $conexao->getConnection();
        $sql = "Select * from usuario where usulogin = ? and ususenha = ?";
        $rs = $con->prepare($sql);
        $rs->bindParam(1, $login);
        $rs->bindParam(2, $senha);
        if ($rs->execute()) {
            if ($rs->rowCount() > 0) {
                while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
                    if(!empty($row)){
                        $this->iniciaSessao($row->idusuario,$row->usunome);
                        $retorno = true;
                        break;
                    }else{
                        $retorno = false;
                        break;
                    }
                }
            }

        }
        if ($retorno){
            die(header("Location: http://".$_SERVER['HTTP_HOST']."/livros/listaLivros.php"));
        }
    }
}
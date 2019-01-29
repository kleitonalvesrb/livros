<?php
/**
 * Created by PhpStorm.
 * User: kleitonbatista
 * Date: 28/01/19
 * Time: 21:39
 */
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
class Conexao
{
    const USERNAME="root";
    const PASSWORD="";
    const HOST="127.0.0.1";
    const DB="livros";

    function Conexao(){

    }
    public function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new PDO("mysql:host={$host};dbname={$db}", $username, $password);
        return $connection;
    }

    /**
     * @param $tabela
     */
    public function listaTodos($tabela){
        $rs = $this->getConnection();
        $stmt = $rs->prepare("select * from {$tabela}");
        if(!$stmt->execute()){
            echo '<pre> erro: ';
            print_r($stmt->errorInfo());
            exit;
        }
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo $linha->usunome . "<br>";
        }

    }


}
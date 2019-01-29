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
        $html = "
        <div class='row'>
           <div class='col-md-offset-2 col-md-8'>
        <table class=\"table table-bordered\">
        <thead>
        <th class='text-center'>ISBN</th>
        <th class='text-center'>Nome</th>
        <th class='text-center'>Editora</th>
        </thead>
        <tbody>";
        $conexao = new Conexao();
        $conn = $conexao->getConnection();
        $stmt = $conn->prepare("select * from livro");
        if(!$stmt->execute()){
            echo '<pre> erro: ';
            print_r($stmt->errorInfo());
            exit;
        }
        while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
            $html .= "<tr>";
            $html .= "<td>" . $linha->isbn . "</td>";
            $html .= "<td>" . $linha->nomelivro . "</td>";
            $html .= "<td>" . $linha->editora . "</td>";
            $html .= "</tr>";
        }

        $html .= " <tr>
                <td>1134124</td>
                <td>Teste</td>
                <td>Editora</td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>";
        return $html;

    }
}
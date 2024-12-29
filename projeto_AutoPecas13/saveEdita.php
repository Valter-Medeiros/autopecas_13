<?php
include_once('config.php');

if(isset($_POST['edita'])){//se existe o post edita POR NAME
    $id = $_POST['id'];//adicionando em cada var por name
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $data_nasc = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    $sql_update = "UPDATE cliente SET nome='$nome', cpf='$cpf', rg='$rg', cidade='$cidade', bairro='$bairro', endereco='$endereco',
     data_nasc='$data_nasc', genero='$genero', email='$email', senha='$senha', telefone='$telefone' WHERE id='$id' ";

    $result = $conexao->query($sql_update); 

     header('Location: cadastrados.php');
}
?>


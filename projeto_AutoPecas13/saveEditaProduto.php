<?php
include_once('config.php');

if(isset($_POST['edita'])){//se existe o post edita POR NAME
    $Tipo = $_POST['tipo'];//adicionando em cada var por name
    $marca = $_POST['marca'];
    $nome_prod = $_POST['nome_produto'];
    $Valor = $_POST['valor'];
    $id = $_POST['id'];
    $data_chegada = $_POST['data_cheg'];
    $origem = $_POST['origem'];
    $cliente_id = $_POST['cliente_id'];
    
    $sql_update = "UPDATE produto SET Tipo='$Tipo', marca='$marca', nome_prod='$nome_prod', Valor='$Valor', id='$id', data_chegada='$data_chegada',
     origem='$origem', cliente_id='$cliente_id' WHERE cliente_id='$cliente_id' ";

    $result = $conexao->query($sql_update); 

     header('Location: cadastradosProduto.php');
}
?>


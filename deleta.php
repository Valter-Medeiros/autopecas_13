<?php
if(!empty($_GET['id'])){//se a busca por id não estiver vazia

    include_once('config.php');

    $id=$_GET['id'];

    $sqlSelect = "SELECT * FROM cliente WHERE id=$id";//seleciona tudo de um a linha se o id for igual ao da var

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows >0)
    {
        $sqlDelete = "DELETE FROM cliente WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header('Location: cadastrados.php');
}
?>
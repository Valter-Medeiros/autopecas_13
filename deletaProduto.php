<?php
if(!empty($_GET['cliente_id'])){//se a busca por id não estiver vazia

    include_once('config.php');

    $cliente_id=$_GET['cliente_id'];

    $sqlSelect = "SELECT * FROM produto WHERE cliente_id=$cliente_id";//seleciona tudo de um a linha se o id for igual ao da var

    $result = $conexao->query($sqlSelect);
    
    if($result->num_rows >0)
    {
        $sqlDelete = "DELETE FROM produto WHERE cliente_id=$cliente_id";
        $resultDelete = $conexao->query($sqlDelete);
    }
    header('Location: cadastradosProduto.php');
}
?>
<?php
if (isset($_POST['submit'])) {
    /*teste 1- para saber está entrando
    print_r('Nome:'.$_POST['tipo']);
    print_r('<br>');
    print_r('CPF:'.$_POST['marca']);
    print_r('<br>');
    print_r('RG:'.$_POST['nome_produto']);
    print_r('<br>');
    print_r('Cidade:'.$_POST['valor']);
    print_r('<br>');
    print_r('Bairro:'.$_POST['id']);
    print_r('<br>');
    print_r('Endereço:'.$_POST['data_cheg']);
    print_r('<br>');
    print_r('Data:'.$_POST['origem']);
    print_r('<br>');
    print_r('Gênero:'.$_POST['cliente_id']);
    print_r('<br>');    
    */

    //2- colocando como var e colocando no banco de dados
    include_once('config.php'); //pega as configurações de entrada da conexão no arquivo config.php

    $Tipo = $_POST['tipo'];
    $marca = $_POST['marca'];
    $nome_prod = $_POST['nome_produto'];
    $Valor = $_POST['valor'];
    $id = $_POST['id'];
    $data_chegada = $_POST['data_cheg'];
    $origem = $_POST['origem'];
    $cliente_id = $_POST['cliente_id'];

    $result = mysqli_query($conexao, "INSERT INTO produto(Tipo,marca,nome_prod,Valor,id,data_chegada,origem,cliente_id) VALUES ('$Tipo', '$marca', '$nome_prod', '$Valor', '$id', '$data_chegada', '$origem', '$cliente_id')");

    header('Location: login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src="_javascript/funcoes.js"></script>
    <title>Cadastro Produto AutoPeças 13</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right,rgb(116, 163, 182),rgb(68, 90, 110));
        position: relative;
        min-height: 100vh;
    }

    .fora-form {
        position: absolute;
        background-color: white;
        padding: 15px;
        border-radius: 15px 15px 15px 15px;
        width: 40%;
        top: 15%;
        left: 30%;
    }

    fieldset {
        border: none;
    }

    legend {
        text-align: center;
        font-size: 28pt;
        background-color: #BB9469;
        border-radius: 10px 10px 10px 10px;
    }

    .inputUser {
        border: none;
        border-bottom: 1px solid black;
        /* coloca borda em baixo */
        outline: none;
        /* tira a borda quando clica */
        width: 100%;
        font-size: 15px;
        background: none;
    }

    .labelInput {
        /* pointer-events: none; torna ele não clicavel */
        transition: 5s;
    }

    #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    .volta {
        position: absolute;
        left: 80%;
        top: 30%;
    }

    .direcionamento-cad {
        border-radius: 15px;
        font-size: 18pt;
        padding: 15px;
        width: 40%;
        background-color: #DDD9CD;
        text-decoration: none;
        color: black;
    }

    #submit {
        background-image: linear-gradient(to right, #fce490, #BB9469);
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    #submit:hover {
        /* colocando degradê de cor da direita para a esquerda */
        background-image: linear-gradient(to right, #BB9469, #BB9469);
    }

    /* DO AUTOPEÇAS 13: */

    header#cabecalho {
        border-bottom: 4px #BB9469 ridge;
        /*grossuro, cor e tipo*/
        height: 100px;
        background: url("_imagens/carro_logo1.png") no-repeat 660px -65px;
        background-size: 500px 220px;
    }

    /*POSIÇÃO DA IMAGEM do cabecalho (carro)*/
    header#cabecalho img#icone {
        position: relative;
        left: 300px;
        top: 120px;
        width: 200px;
    }


    /*MENUS*/
    nav#menus {
        display: block;
    }

    nav#menus a {
        color: #BB9469;
        text-decoration: none;
        /*tira o sublinhado*/
    }

    nav#menus li {
        display: block;
        background-color: rgb(16, 16, 80);
        padding: 20px;
        margin: 5px;
        box-shadow: 0px 4px 4px black;
        transition: background-color 1s;
        /*coloca transição*/
        text-align: center;
    }

    nav#menus ul {
        list-style: none;
        text-transform: uppercase;
        position: absolute;
        top: 90px;
        left: 30px;

    }

    nav#menus li:hover {
        background-color: #fce490;
        text-decoration: none;
    }

    /*CONFIGURANDO SEPARAÇÕES*/
    /*lateral*/

    /*principal*/
    section#principal {
        padding-bottom: 2.5rem;
    }
</style>

<body>
    <!-- AUTOPEÇAS 13 -->
    <header id="cabecalho">
        <img src="_imagens/carros-login3.png" id="icone">

        <!--MENUS-->
        <nav id="menus">
            <ul>
                <li onmousemove="mudaFoto('_imagens/casa1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="index.html">Início</a></li>
                <li onmousemove="mudaFoto('_imagens/pneu_vazado1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="pneus.html">Pneus</a></li>
                <li onmousemove="mudaFoto('_imagens/roda_vazada1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="rodas.html">Rodas</a></li>
                <li onmousemove="mudaFoto('_imagens/pecas_vazado1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="produtosgerais.html">Produtos Gerais</a></li>
                <li onmousemove="mudaFoto('_imagens/ajudasf1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="contato.html">Contato</a></li>
                <li onmousemove="mudaFoto('_imagens/promocao.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="comprar.html">Comprar</a></li>
            </ul>
        </nav>
    </header>
    <!-- PHP / FORM -->

    <section class="principal">
        <div class="volta">
            <a class="direcionamento-cad" href="login.php">Login</a>
        </div>
        <div class="fora-form">
            <form action="cadastroProduto.php" method="POST">
                <fieldset>
                    <legend><b>Cadastro Produto</b></legend>
                    <br>
                    <p><label form="tipo">Tipo: </label>
                        <select name="tipo" id="tipo">
                            <option value="Pneu" selected> Pneu</option>
                            <option value="Roda">Roda</option>
                            <option value="Produtos Gerais">Produtos Gerais</option>
                        </select>
                    </p>
                    <br><br>

                    <div class="inputBox">
                        <label for="marca" class="labelInput">Marca</label>
                        <input type="text" name="marca" id="marca" class="inputUser" required>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <label for="nome_produto" class="labelInput">Nome Produto</label>
                        <input type="text" name="nome_produto" id="nome_produto" class="inputUser" required>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <label for="valor" class="labelInput">Valor (R$)</label>
                        <input type="number" name="valor" id="valor" class="inputUser" required step="0.01" min="0">
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <label for="id" class="labelInput">Id Produto:</label>
                        <input type="text" name="id" id="id" class="inputUser" required>
                    </div>
                    <br><br>                    
                    
                    <label for="data_cheg"><b>Data Chegada:</b></label>
                    <input type="date" name="data_cheg" id="data_cheg" required>
                    <br><br>                    

                    <div class="inputBox">
                        <label for="origem" class="labelInput">Origem</label>
                        <input type="text" name="origem" id="origem" class="inputUser" required>
                    </div>
                    <br><br>                    

                    <div class="inputBox">
                        <label for="cliente_id" class="labelInput">Id Cliente</label>
                        <input type="text" name="cliente_id" id="cliente_id" class="inputUser" required>
                    </div>
                    <br><br>
                    <p><input type="submit" name="submit" id="submit"></p>

                </fieldset>
    </section>
    </form>
    </div>

</body>

</html>
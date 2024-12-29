<?php
if (isset($_POST['submit'])) {
    /*teste 1- para saber está entrando
    print_r('Nome:'.$_POST['nome']);
    print_r('<br>');
    print_r('CPF:'.$_POST['cpf']);
    print_r('<br>');
    print_r('RG:'.$_POST['rg']);
    print_r('<br>');
    print_r('Cidade:'.$_POST['cidade']);
    print_r('<br>');
    print_r('Bairro:'.$_POST['bairro']);
    print_r('<br>');
    print_r('Endereço:'.$_POST['endereco']);
    print_r('<br>');
    print_r('Data:'.$_POST['data_nascimento']);
    print_r('<br>');
    print_r('Gênero:'.$_POST['genero']);
    print_r('<br>');
    print_r('Email:'.$_POST['email']);
    print_r('<br>');
    print_r('Senha:'.$_POST['senha']);
    print_r('<br>');
    print_r('Telefone:'.$_POST['telefone']);
    print_r('<br>');
    */

    //2- colocando como var e colocando no banco de dados
    include_once('config.php'); //pega as configurações de entrada da conexão no arquivo config.php

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

    $result = mysqli_query($conexao, "INSERT INTO cliente(nome,cpf,rg,cidade,bairro,endereco,data_nasc,genero,email,senha,telefone) VALUES ('$nome', '$cpf', '$rg', '$cidade', '$bairro', '$endereco', '$data_nasc', '$genero', '$email', '$senha', '$telefone')");

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
    <title>Cadastro Cliente AutoPeças 13</title>
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
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend> <b>Cadastro Cliente</b> </legend>
                    <br>
                    <div class="inputBox">
                        <label for="nome" class="labelInput">Nome completo</label>
                        <input type="text" name="nome" id="nome" class="inputUser" required>

                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="cpf" class="labelInput">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="inputUser" required>

                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="rg" class="labelInput">RG</label>
                        <input type="text" name="rg" id="rg" class="inputUser" required>
                    </div>
                    <br><br>
                    <p><label form="cidade">Cidade: </label>
                        <select name="cidade" id="cidade">
                            <option value="Belo Horizonte" selected> Belo Horizonte</option>
                            <option value="Contagem">Contagem</option>
                            <option value="Uberlândia">Uberlândia</option>
                            <option value="Betim">Betim</option>
                            <option value="Uberaba">Uberaba</option>
                            <option value="Juiz de Fora">Juiz de Fora</option>
                            <option value="Ouro Preto">Ouro Preto</option>
                        </select>
                    </p>
                    <br><br>
                    <div class="inputBox">
                        <label for="bairro" class="labelInput">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="endereco" class="labelInput">Endereço:</label>
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    </div>
                    <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br><br>
                    <p>Gênero</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">outro</label>
                    <br><br>
                    <div class="inputBox">
                        <label for="email" class="labelInput">E-mail</label>
                        <input type="text" name="email" id="email" class="inputUser" required>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="senha" class="labelInput">Senha</label>
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <label for="telefone" class="labelInput">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    </div>
                    <br><br>
                    <p><input type="submit" name="submit" id="submit"></p>

                </fieldset>
    </section>
    </form>
    </div>

</body>

</html>
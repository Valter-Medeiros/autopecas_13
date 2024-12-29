<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" src="./_javascript/funcoes.js"></script>
    <title>Login-AutoPeças 13</title>
</head>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right,rgb(116, 163, 182),rgb(68, 90, 110));
}

.form {
    background-color: #ffffff;
    position: absolute;
    width: 16%;
    top: 15%;
    left: 40%;
    padding: 20px;
    border-radius: 15px 15px 15px 15px;
    color: rgb(16, 16, 80);
}

.dig {
    border: none;
    font-size: 18pt;
    border: none;
    border-bottom: 1px solid black;
    /* coloca borda em baixo */
    outline: none;
    /* tira a borda quando clica */
}

.enter {
    border: none;
    border-radius: 15px 0px 15px 0px;
    width: 100%;
    /* Ocupação horizontal */
    padding: 10px;
    /* Ocupação do vertical */
    font-size: 15pt;
}

.enter:hover {
    background-color: #BB9469;
}

.volta {
    position: absolute;
    left: 65%;
    top: 20%;
}

.direcionamento-cad {
    border-radius: 10px;
    font-size: 18pt;
    padding: 15px;
    width: 40%;
    background-color: #DDD9CD;
    text-decoration: none;
    color: black;
}

/* DA AUTOPEÇAS 13: */

header#cabecalho {
    border-bottom: 4px #BB9469 ridge;
    /*grossura, cor e tipo*/
    height: 100px;
    background: url("_imagens/carro_logo1.png ") no-repeat 660px -80px;
    background-size: 500px 250px;
}

/*POSIÇÃO DA IMAGEM do cabecalho (coral)*/
header#cabecalho img#icone {
    position: relative;
    left: 280px;
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
    top: 100px;
    left: 30px;

}

nav#menus li:hover {
    background-color: #fce490;
    text-decoration: none;
}
</style>

<body>
    <header id="cabecalho">

        <img src="_imagens/carros-login3.png" id="icone">

        <!--MENUS-->
        <nav id="menus">
            <ul>
                <li onmousemove="mudaFoto('_imagens/casa1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a
                        href="index.html">Início</a></li>
                <li onmousemove="mudaFoto('_imagens/pneu_vazado1.png')"
                    onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="pneus.html">Pneus</a></li>
                <li onmousemove="mudaFoto('_imagens/roda_vazada1.png')"
                    onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="rodas.html">Rodas</a></li>
                <li onmousemove="mudaFoto('_imagens/pecas_vazado1.png')"
                    onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="produtosgerais.html">Produtos
                        Gerais</a></li>
                <li onmousemove="mudaFoto('_imagens/ajudasf1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')">
                    <a href="contato.html">Contato</a></li>
                <li onmousemove="mudaFoto('_imagens/promocao.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')">
                    <a href="comprar.html">Comprar</a></li>
            </ul>
        </nav>

    </header>
    <div class="volta">
        <a class="direcionamento-cad" href="cadastro.php">Cadastro Cliente</a>
        <a class="direcionamento-cad" href="cadastroProduto.php">Cadastro Produto</a>
    </div>

    <div class="form">

        <h1>Login
            <img src="_imagens/foto14_bridgestone.jpg" />
        </h1>
        <form action="testaLogin.php" method="POST">
            <p><input type="email" name="email" placeholder="Email" class="dig"></p>
            <br><br>
            <p><input type="password" name="senha" placeholder="Senha" class="dig"></p>
            <br><br>
            <input type="submit" class="enter" name="submit" value="Enviar">
        </form>
    </div>


</body>

</html>
<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) { //se a NÃO existência da sessão do name email testar para verdadeiro faça
    //não acessa
    unset($_SESSION['email']);
    unset($_SESSION['senha']); //limpa a variável sessão 
    header('Location: login.php'); //volta pro login
}
$logado = $_SESSION['email']; //cria uma var com a sessão do email

if (!empty($_GET['search'])) {

    $data = $_GET['search'];
    $sql = "SELECT cliente.id AS cliente_id, cliente.id, cliente.nome, cliente.cpf, cliente.email, produto.Tipo, produto.marca, produto.Valor, produto.data_chegada, produto.origem FROM cliente INNER JOIN produto ON cliente.id = produto.cliente_id WHERE cliente.id LIKE '%$data%' OR cliente.nome LIKE '%$data%' OR cliente.cpf LIKE '%$data%' OR cliente.email LIKE '%$data%' OR produto.Tipo LIKE '%$data%' OR produto.marca LIKE '%$data%' OR produto.Valor LIKE '%$data%' OR produto.origem LIKE '%$data%' ORDER BY cliente.id DESC";
    } else {
        $sql = "SELECT cliente.id AS cliente_id, cliente.id, cliente.nome, cliente.cpf, cliente.email, produto.Tipo, produto.marca, produto.Valor, produto.data_chegada, produto.origem FROM cliente INNER JOIN produto ON cliente.id = produto.cliente_id ORDER BY cliente.id DESC";

}

$result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- pega os style do broodstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script language="javascript" src="_javascript/funcoes.js"></script>
    <title>Banco dados Cliente_Produto</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right,rgb(116, 163, 182),rgb(68, 90, 110));
        text-align: center;
    }

    .table-bg {
        background: rgba(0, 0, 0, 0.3);
        /* o ponto no final mostra o nível de ofuscado*/
        border-radius: 15px 15px 15px 15px;
        /* borda superior(direita, esquerda), inferiores(direita, esquerda) */
        position: relative;
        top: 120px;
    }

    .box-search {
        display: flex;
        /* coloca como móvel*/
        justify-content: center;
        /* coloca no centro*/
        gap: .1%;
        /* coloca um espaço de 1% entre o digitável*/
    }

    .sair {
        text-align: right;
    }

    .direcionamento-cad {
        border-radius: 10px;
        font-size: 10pt;
        padding: 15px;
        width: 40%;
        background-color: #DDD9CD;
        text-decoration: none;
        color: black;
    }

    .volta {
        position: absolute;
        left: 75%;
        top: 20%;
    }

    /* DO AUTOPEÇAS 13: */

    header#cabecalho {
        border-bottom: 4px #BB9469 ridge;
        /*grossuro, cor e tipo*/
        height: 100px;
        background: url("_imagens/carro_logo1.png ") no-repeat 640px -80px;
        background-size: 500px 250px;
    }

    /*POSIÇÃO DA IMAGEM do cabecalho (carro)*/
    header#cabecalho img#icone {
        position: relative;
        left: -480px;
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
        padding: 10px;
        margin: 4px;
        box-shadow: 0px 0px 4px black;
        transition: background-color 1s;
        /*coloca transição*/
        text-align: center;
    }

    nav#menus ul {
        list-style: none;
        text-transform: uppercase;
        position: absolute;
        top: 100px;
        left: 20px;

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
                <li onmousemove="mudaFoto('_imagens/casa1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="index.html">Início</a></li>
                <li onmousemove="mudaFoto('_imagens/pneu_vazado1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="pneus.html">Pneus</a></li>
                <li onmousemove="mudaFoto('_imagens/roda_vazada1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="rodas.html">Rodas</a></li>
                <li onmousemove="mudaFoto('_imagens/pecas_vazado1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="produtosgerais.html">Produtos Gerais</a></li>
                <li onmousemove="mudaFoto('_imagens/ajudasf1.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="contato.html">Contato</a></li>
                <li onmousemove="mudaFoto('_imagens/promocao.png')" onmouseout="mudaFoto('_imagens/carros-login3.png')"><a href="comprar.html">Comprar</a></li>


            </ul>
        </nav>

    </header>

    <div class="sair">
        <a href="sair.php" class="btn btn-danger me-5">sair</a>
    </div>
    <br>
    <div class="volta">
        <a class="direcionamento-cad" href="cadastrados.php">Cadastrados Cliente</a>
        <a class="direcionamento-cad" href="cadastradosProduto.php">Cadastrados Produto</a>
    </div>

    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button class="btn btn-primary" onclick="searchData()">
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z' />
            </svg>
        </button>
    </div>

    <div class="m-5">
        <table class="table text-white table-bg">
            <thead><!-- tag que é a tabela "mãe", vai ficar fixo o tr(linhas) e th(títulos) -->
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data Chegada</th>
                    <th scope="col">Origem</th>                    
                </tr>
            </thead>
            <tbody><!-- tag que é a tabela filha, vai puxar os tr e td(prenchimentos) -->
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) //enquanto user_data  receber o que vai escrever
                {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['cpf'] . "</td>"; //imprime o 
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['Tipo'] . "</td>";
                    echo "<td>" . $user_data['marca'] . "</td>";
                    echo "<td>" . $user_data['Valor'] . "</td>";
                    echo "<td>" . $user_data['data_chegada'] . "</td>";
                    echo "<td>" . $user_data['origem'] . "</td>";                    
                    echo "<td>                
                </td>"; //coloca o botão do lápis (LEMBRAR DE TIRAR AS ÁSPAS DUPLAD E TROCAR POR SIMPLES)
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
<script>
    var search = document.getElementById('pesquisar');
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'info_ClientexProduto.php?search=' + search.value;
    }
</script>

</html>
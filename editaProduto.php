<?php
if (!empty($_GET['cliente_id'])) { //busca a coluna id e se ele não estiver vazio, faça

    include_once('config.php');
    $cliente_id = $_GET['cliente_id']; //busca o id direto do banco de dados NÃO É POR NAME
    $sqlSelect = "SELECT * FROM `produto` WHERE cliente_id=$cliente_id"; //recebe comando que seleciona tudo quando o nome fo BD for igual ao da var
    $result = $conexao->query($sqlSelect); //atribui a result a conexão e a consulta do que escrever

    if ($result->num_rows > 0) { //se result for maior que 0 colunas, faça

        while ($user_data = mysqli_fetch_assoc($result)) { //
            //para imorimir como placeholder(outro arquivo que salva as aterações):
            $Tipo = $user_data['Tipo']; //coloca as entradas DIRETO DO BANCO DE DADOS em uma variável que tem o nome de cada coluna no banco de dados
            $marca = $user_data['marca'];
            $nome_prod = $user_data['nome_prod'];
            $Valor = $user_data['Valor'];
            $id = $user_data['id'];
            $data_chegada = $user_data['data_chegada'];
            $origem = $user_data['origem'];
            $cliente_id = $user_data['cliente_id'];
        }
    } else {
        header('Location: cadastradosProduto.php');
    }
} else {
    header('Location: cadastradosProduto.php');
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Clientes AutoPeças 13</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #fce490, #BB9469);
    }

    .fora-form {
        position: absolute;
        background-color: white;
        padding: 15px;
        border-radius: 15px 0px 15px 0px;
        width: 40%;
        top: 5%;
        left: 30%;
    }

    fieldset {
        border: none;
    }

    legend {
        text-align: center;
        font-size: 18pt;
        background-color: #BB9469;
        border-radius: 15px 0px 15px 0px;
        ;
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

    a {
        border-radius: 15px;
        font-size: 18pt;
        padding: 15px;
        width: 40%;
        background-color: #DDD9CD;
        text-decoration: none;
        color: black;
    }

    #edita {
        background-image: linear-gradient(to right, #fce490, #BB9469);
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    #edita:hover {
        /* colocando degradê de cor da direita para a esquerda */
        background-color: #BB9469;
    }


    /* DA AutoPeças 13: */

    header#cabecalho {
        border-bottom: 4px #BB9469 ridge;
        /*grossuro, cor e tipo*/
        height: 100px;
        background: url("../_imagens/logo2.png ") no-repeat 250px -80px;
        background-size: 500px 250px;
    }

    /*POSIÇÃO DA IMAGEM do cabecalho (carro)*/
    header#cabecalho img#icone {
        position: relative;
        left: 100px;
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
        top: 20px;
        left: 20px;

    }

    nav#menus li:hover {
        background-color: #fce490;
        text-decoration: none;
    }
</style>

<body>
    <div class="volta">
        <a href="cadastradosProduto.php">Cadastrados Produto</a>
    </div>
    <div class="fora-form">
        <form action="saveEditaProduto.php" method="POST">
            <fieldset>
                <legend> <b>Editar Produto</b> </legend>
                <br>

                <p><label form="tipo">Tipo </label>
                    <select name="tipo" id="tipo">
                        <option value="Pneu" <?php echo ($Tipo == 'Pneu') ? 'selected' : '' ?>> Pneu</option>
                        <option value="Roda" <?php echo ($Tipo == 'Roda') ? 'selected' : '' ?>>Roda</option>
                        <option value="Produtos Gerais" <?php echo ($Tipo == 'Produtos Gerais') ? 'selected' : '' ?>>Produtos Gerais</option>
                    </select>
                </p>
                <br><br>

                <div class="inputBox">
                    <label for="marca" class="labelInput">Marca</label>
                    <input type="text" name="marca" id="marca" class="inputUser" value="<?php echo $marca ?>" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="nome_produto" class="labelInput">Nome Produto</label>
                    <input type="text" name="nome_produto" id="nome_produto" class="inputUser" value="<?php echo $nome_prod ?>" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="valor" class="labelInput">Valor</label>
                    <input type="number" name="valor" id="valor" class="inputUser" value="<?php echo $Valor ?>" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="id" class="labelInput">ID Produto</label>
                    <input type="text" name="id" id="id" class="inputUser" value="<?php echo $id ?>" required>
                </div>
                <br><br>

                <label for="data_cheg"><b>Data Chegada:</b></label>
                <input type="date" name="data_cheg" id="data_cheg" value="<?php echo $data_chegada ?>" required>
                <br><br><br>

                <div class="inputBox">
                    <label for="origem" class="labelInput">Origem:</label>
                    <input type="text" name="origem" id="origem" class="inputUser" value="<?php echo $origem ?>" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="cliente_id" class="labelInput">Id Cliente</label>
                    <input type="text" name="cliente_id" id="cliente_id" class="inputUser" value="<?php echo $cliente_id ?>" required>
                </div>
                <br><br>

                <input type="hidden" name="cliente_id" value="<?php echo $cliente_id ?>"><!-- -->
                <p><input type="submit" name="edita" id="edita"></p>

            </fieldset>
        </form>
    </div>
</body>

</html>
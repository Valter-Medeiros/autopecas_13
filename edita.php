<?php
if(!empty($_GET['id'])){//busca a coluna id e se ele não estiver vazio, faça

    include_once('config.php');
    $id = $_GET['id'];//busca o id direto do banco de dados NÃO É POR NAME
    $sqlSelect = "SELECT * FROM `cliente` WHERE id=$id";//recebe comando que seleciona tudo quando o nome fo BD for igual ao da var
    $result = $conexao->query($sqlSelect); //atribui a result a conexão e a consulta do que escrever

    if($result->num_rows >0){//se result for maior que 0 colunas, faça
        
        while($user_data = mysqli_fetch_assoc($result)){//
            //para imorimir como placeholder(outro arquivo que salva as aterações):
            $nomeE = $user_data['nome']; //coloca as entradas DIRETO DO BANCO DE DADOS em uma variável que tem o nome de cada coluna no banco de dados
            $cpf = $user_data['cpf'];
            $rg = $user_data['rg'];
            $cidade = $user_data['cidade'];
            $bairro = $user_data['bairro'];
            $endereco = $user_data['endereco'];
            $data_nasc = $user_data['data_nasc'];
            $genero = $user_data['genero'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
        }
    
    }
    else{
        header('Location: cadastrados.php');
    }
}else{
    header('Location: cadastrados.php');
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita Clientes Peixes Flora</title>
</head>
<style>
   body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, #fce490, #BB9469);
    } 
    .fora-form{
        position: absolute;
        background-color: white;
        padding: 15px;
        border-radius:15px 0px 15px 0px ;
        width: 40%;
        top: 5%;
        left: 30%;
    }
    fieldset{
        border: none;
    }
    legend{
        text-align: center;
        font-size: 18pt;
        background-color: #BB9469;
        border-radius: 15px 0px 15px 0px ;;
    }
    .inputUser{
        border: none;
        border-bottom: 1px solid black;/* coloca borda em baixo */
        outline: none;/* tira a borda quando clica */
        width: 100%;
        font-size: 15px;
        background: none;
    }
    .labelInput{
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
    
    .volta{
        position: absolute;
        left: 80%;
        top: 30%; 
    }
    a{
        border-radius:15px;
        font-size: 18pt;
        padding:15px;
        width: 40%;
        background-color:#DDD9CD;
        text-decoration:none;
        color:black;
    }
    #edita{
            background-image: linear-gradient(to right, #fce490, #BB9469);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #edita:hover{
            /* colocando degradê de cor da direita para a esquerda */
            background-color: #BB9469 ;
        }

    
    /* DO PEIXES FLORA: */

    header#cabecalho{
    border-bottom: 4px #BB9469 ridge; /*grossuro, cor e tipo*/
    height: 100px;
    background: url("../_imagens/logo2.png ") no-repeat 250px -80px;
    background-size: 500px 250px; 
}

/*POSIÇÃO DA IMAGEM do cabecalho (coral)*/
header#cabecalho img#icone {
    position: relative;
    left: 100px;
    top: 120px;
    width: 200px;
}


/*MENUS*/
nav#menus{
    display: block;
}

nav#menus a{
    color: #BB9469;
    text-decoration: none; /*tira o sublinhado*/
}

nav#menus li{
    display: block;
    background-color:rgb(16, 16, 80);
    padding: 10px;
    margin: 4px;
    box-shadow: 0px 0px 4px black;
    transition: background-color 1s; /*coloca transição*/
    text-align: center;
}

nav#menus ul{
    list-style: none;
    text-transform:uppercase ;
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
        <a href="cadastrados.php">Cadastrados</a>
    </div>
    <div class="fora-form">
        <form action="saveEdita.php" method="POST">
            <fieldset>
                <legend> <b>Editar</b> </legend>
                <br>
                 <div class="inputBox"> 
                     <label for="nome" class="labelInput">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nomeE ?>" required>
                   
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cpf" class="labelInput">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                     <label for="rg" class="labelInput">RG</label>
                    <input type="text" name="rg" id="rg" class="inputUser" value="<?php echo $rg ?>" required>
                </div>
                <br><br>
                <p><label form="cidade">Cidade: </label> 
                    <select name="cidade" id="cidade">
                        <option value="Belo Horizonte" <?php echo ($cidade=='Belo Horizonte') ? 'selected' : '' ?>> Belo Horizonte</option>
                        <option  value="Contagem" <?php echo ($cidade=='Contagem') ? 'selected' : '' ?>>Contagem</option>
                        <option  value="Uberlândia" <?php echo ($cidade=='Uberlândia') ? 'selected' : '' ?>>Uberlândia</option>
                        <option  value="Betim" <?php echo ($cidade=='Betim') ? 'selected' : '' ?> >Betim</option>
                        <option value="Uberaba" <?php echo ($cidade=='Uberaba') ? 'selected' : '' ?>>Uberaba</option>
                        <option  value="Juiz de Fora" <?php echo ($cidade=='Juiz de Fora') ? 'selected' : '' ?>>Juiz de Fora</option>
                        <option  value="Ouro Preto" <?php echo ($cidade=='Ouro Preto') ? 'selected' : '' ?>>Ouro Preto</option>
                    </select>
                </p>
                <br><br>
                <div class="inputBox">
                    <label for="bairro" class="labelInput">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" class="inputUser" value="<?php echo $bairro ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="endereco" class="labelInput">Endereço:</label>
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>" required>
                <br><br><br>
                <p>Gênero</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($genero=='feminino') ? 'checked' : '' ?> required>
                <label for="feminino">feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($genero=='masculino') ? 'checked' : '' ?> required>
                <label for="masculino">masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($genero=='outro') ? 'checked' : '' ?> required>
                <label for="outro">outro</label>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail</label>
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>"><!-- -->
                <p><input type="submit" name="edita" id="edita"></p>
                
            </fieldset>
        </form>
    </div>
</body>
</html>
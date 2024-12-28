<?php
session_start(); //iniciando sessão
//print_r($_REQUEST); //teste-1 confere se a requisição foi feita ao enviar os dados

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))//se a var que mandou existir, a var do email não estiver vazia, e a da senha também não estiver vazia
{
    //acessa
    include_once('config.php');//pega as config de entrada no BD
    $email = $_POST['email']; //declarando valor para as var
    $senha = $_POST['senha'];

    /*teste-2 print_r('E_mail: '.$email); //imprimindo
    print_r('<br>');
    print_r('Senha: '.$senha);*/

    $sql = "SELECT * FROM cliente WHERE email='$email' and senha='$senha'";//var que recebe cod que mostra tudo de usuarios quando forem iguais aos colocados no BD 

    $result = $conexao->query($sql);//var que recebe a entrada para o Banco de dados e os dados que entraram

    /*teste-3
    print_r($sql);//vai printar a var sql
    print_r($result);//imprime o sesult
    */

    if(mysqli_num_rows($result) < 1){//se tiver menois que 1 coluna do correto
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');//manda para o login
    }
    else{ //se tiver a partir de 1 coluna do correto
        $_SESSION['email'] = $email; //inicia a sessão de name email valendo a var de email 
        $_SESSION['senha'] = $senha;
        header('Location: cadastrados.php');
    }

}else{
    //não acessa
    header('Location: login.php'); //se alguns dos campos estiverem vazios, volta ao início
}
?>
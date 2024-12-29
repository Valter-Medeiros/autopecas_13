<?php
$dbHost = 'localhost';//cria uma var com o nome da conexão de banco de dados
$dbusername = 'root'; //cria uma var com o nome do usuário da conexão
$dbpassword = ''; //cria uma var com o valor da senha da conexão
$dbname = 'autopecas13'; //cria uma var com o nome do banco de dados

$conexao = new mysqli($dbHost, $dbusername, $dbpassword, $dbname);//cria var com o objeto para login
/*//teste para ver se o banco de dados está funcionando(testar abrindo ele própio)
if($conexao -> connect_errno){//"connect_errno" É UMA FUNÇÃO PARA VER SE CONCTOU
    echo "erro";
}else{
    echo "Foi com sucesso";
}
*/
?>
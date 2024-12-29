<?php
session_start(); //começa uma nova sessão
unset($_SESSION['email']);
unset($_SESSION['senha']);//limpa a variável da sessão
header('location: login.php');//manda para o login
?>
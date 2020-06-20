<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'web';

    //conexao com o banco de dados

    $connect = mysqli_connect($host, $user, $senha, $db);

    //coleta dados do formulario
    $nome = $_GET['nome'];
    $senhaUser = $_GET['senha'];
    $email = $_GET['email'];

    //query para a database
    $sql = "INSERT INTO usuario (nome, senha, email) VALUES ('$nome','$senhaUser','$email')";

    $result = mysqli_query($connect, $sql);

    echo "inserção efetuada, ou nao kkkkk"

    header ('Location: index.php');
?>
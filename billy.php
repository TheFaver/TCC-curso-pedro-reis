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
    $sql = "SELECT * FROM usuario WHERE id = 1";

    $result = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($result);


    echo "Nome: " . $dados['nome'];
    echo "Senha: " . $dados['senha'];
    echo "Email: " . $dados['email'];
  

?>
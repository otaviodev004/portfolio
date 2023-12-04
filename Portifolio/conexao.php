<?php

    $dbHost = 'localhost'; // Host do banco de dados
    $dbUsername = 'root'; // Nome de usuário do banco de dados
    $dbPassword = ''; // Senha do banco de dados
    $dbName = 'portfolio'; // Nome do banco de dados

    $con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    if($con->connect_error){
        die("Conexão falhou." . $con->connect_error);
    }

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO formulario(nome, email, celular, mensagem) VALUES ('$nome', '$email', '$celular', '$mensagem')";

    if($con->query($sql) === TRUE){
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro na inserção do registro:" . $con->error;
    }

    $con->close();

    header("Location: home.html");
    exit();

?>
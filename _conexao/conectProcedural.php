<?php
$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "crud";

//Criação da conexão
$conn = mysqli_connect ($servidor, $usuario, $senha, $database);

//Checando conexão
if (!$conn) {
    die ("conexão falhou: " . mysqli_connect_error());
}
echo "Conexão realizada com sucesso";

// Create database
$sql = "CREATE DATABASE DB_teste";
if (mysqli_query($conn, $sql)) {
  echo "Banco de dados Criado com sucesso!";
} else {
  echo "Error ao criar o banco: " . mysqli_error($conn);
}

mysqli_close($conn);
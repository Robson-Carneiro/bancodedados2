<?php
$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "myDb";
//Criação da conexão
$conn = new mysqli($servidor, $usuario, $senha, $database);

//Checando conexão
if ($conn->connect_error) {
  die("A conexão falhou: " . $conn->connect_error);
}







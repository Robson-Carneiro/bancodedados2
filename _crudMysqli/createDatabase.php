<?php
include '../_conexao/conectMysqli.php';

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Banco de dados Criado com sucesso!";
} else {
  echo "Error ao criar o banco: " . $conn->error;
}

$conn->close(); 
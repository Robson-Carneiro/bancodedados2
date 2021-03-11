<?php
$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "crud";

try {
  // Criando a conexão com PDO
  $conn = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
  // Checar a conexão com PDO se tem erros
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado com sucesso!";
  $sql = "CREATE DATABASE myDBPDO";
  // use exec () porque nenhum resultado é retornado
  $conn->exec($sql);
  echo "Banco de dados Criado com sucesso! <br>";
} catch(PDOException $e) {
  echo "A conexão falhou: " . $e->getMessage();
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
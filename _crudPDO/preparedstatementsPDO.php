<?php
$servidor = "localhost";
$usuario = "root";
$senha = "senac";
$database = "myDBPDO";

try {
  // Criando a conexão com PDO
  $conn = new PDO("mysql:host=$servidor;dbname=$database", $usuario, $senha);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  // insert a row
  $firstname = ($_POST["nome"]);
  $lastname = ($_POST["sobrenome"]);
  $email = ($_POST["email"]);
  $stmt->execute();

  echo 'Novo registro cadastrado!';

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
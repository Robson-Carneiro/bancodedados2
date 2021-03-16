<?php
include '../_conexao/conectMysqli.php';
$Id = $_POST["Id"];
$Acao = $_POST["Acao"];

// prepare and bind
if ($Acao == "Cadastrar") {
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");

// set parameters and execute
$firstname = ($_POST["nome"]);
$lastname = ($_POST["sobrenome"]);
$email = ($_POST["email"]);

$stmt->bind_param("sss", $firstname, $lastname, $email);

$stmt->execute();
echo "Dados cadastrados!";
$stmt->close();
$conn->close();
}else {
  $firstname = ($_POST["nome"]);
  $lastname = ($_POST["sobrenome"]);
  $email = ($_POST["email"]);
  $sql = "UPDATE MyGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$Id";

  if ($conn->query($sql) === TRUE) {
      echo "Dados atualizado com sucesso";
  } else {
      echo "Erro na atualização: " . $conn->error;
  }

  $conn->close();
}
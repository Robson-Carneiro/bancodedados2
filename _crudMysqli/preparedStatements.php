<?php
include '../_conexao/conectMysqli.php';

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = ($_POST["nome"]);
$lastname = ($_POST["sobrenome"]);
$email = ($_POST["email"]);

$stmt->execute();
echo "Dados cadastrados!";
$stmt->close();
$conn->close();
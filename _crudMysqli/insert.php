<?php
include '../_conexao/conectMysqli.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Robson2', 'Doe', 'john@example.com');";
/*$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary2', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie2', 'Dooley', 'julie@example.com')";*/

//multi_query insere muitos dados no banco
/*if ($conn->multi_query($sql) === TRUE) {
    $ultimo_id = $conn->insert_id;
  echo "New record created successfully" . $ultimo_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

//insere dados no banco
if ($conn->query($sql) === TRUE) {
  $ultimo_id = $conn->insert_id;
echo "New record created successfully" . $ultimo_id;
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
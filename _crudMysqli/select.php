<div class="container">
<h2 class="display-3" style="font-weight: bold;" >Listar de Usuários</h2>
            
<?php
include 'Header.php';
include '../_conexao/conectMysqli.php';

$sql = "SELECT id, firstname, lastname, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
echo "<table class='table table-dark table-striped' >"
. "<tr><th>ID</th>"
. "<th>Name</th>"
. "<th>Sobrenome</th>"
. "<th>Email</th>"
. "<th>Ações</th>"
. "</tr>";
// output data of each row
while ($row = $result->fetch_assoc()) {
    echo "<tr>"
    . "<td>" . $row["id"] . "</td>"
    . "<td>" . $row["firstname"] . "</td> "
    . "<td>" . $row["lastname"] . "</td>"
    . "<td>" . $row["email"] . "</td>"
    . "<td>"
    . "<a href='formCadastro.php?id={$row["id"]}'>Atualizar | </a>"
    . "<a href='deleta.php?id={$row["id"]}'>Deletar</a>"
    . "</td>"
    . "</tr>";
}
echo "</table>";
} else {
echo "0 results";
}
$conn->close();
?>
</div>
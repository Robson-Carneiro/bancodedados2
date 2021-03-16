<?php
include 'Header.php';
include '../_conexao/conectMysqli.php';
#Edição de dados
if(isset($_GET['id'])) {
    $Acao="Editar";
    $sql = "SELECT * FROM MyGuests WHERE id={$_GET['id']}";
$result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
    $Id = $row["id"];
    $Nome = $row["firstname"];
    $Sobrenome = $row["lastname"];
    $Email = $row["email"];
   
    }
   
}

#Cadastro novo
else{
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sobrenome = "";
    $Email = "";
}
?>


<div class="container" style="background: #ccc">
            <h2 class="display-2">Formulário de cadastro</h2>   
  <div>
<form method="post" action="preparedstatements.php">
<input type="hidden" id="Acao" name="Acao"  value="<?php echo $Acao; ?>">
 <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
    <div class="form-group"> Name: <input class="form-control" type="text" name="nome" value="<?php echo $Nome; ?>"></div>
    <div class="form-group"> Sobrenome: <input class="form-control" type="text" name="sobrenome" value="<?php echo $Sobrenome; ?>"></div>
    <div class="form-group"> E-mail: <input class="form-control" type="text" name="email" value="<?php echo $Email; ?>"></div>
    <input class="btn btn-outline-success" type="submit" name="submit" value="<?php echo $Acao; ?>">  
                    <a href="select.php"><span class="badge badge-primary"><h5>Listar</h5></span></a>
</form>
</div>

</div>





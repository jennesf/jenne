<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<title>Escola Superior de Informática</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    
<h1 id ="titulo">INFORMÁTICA - CADASTRO</h1>

<div id = "area_menu"> 
    <a href="curso.php">Curso</a> | 
    <a href="turma.php">Turma </a> | 
    <a href="#">Aluno</a> | 
    <a href="matricula.php">Matrícula</a>  
</div>

<!-- $PHP_SELF: maneira que o PHP se referencia a pagina atual -->
<form action="aluno.php" method="POST"><br>
<fieldset class ="grupo">
<div class = "area">
Código do Aluno:<br><br><input type="text" name="codigo_aluno" required>  <br><br>
Nome do Aluno:<br><br> <input type="text" name="nome_aluno" required><br><br>
Data de Nascimento:<br><br> <input type="text" name="datanas" required><br><br>
Email:<br><br><input type="text" name="email" required>  <br><br>
CPF:<br><br><input type="text" name="cpf" required>  <br><br>
</div>

<!-- Submit button -->
<input class = "botao" type="submit" name="enviar" value="Enviar">
</form>
</fieldset>


<?php
include "conexao.php";
if(isset($_POST['enviar'])){
  if(isset($_POST['codigo_aluno'])){
    $CodA = $_POST['codigo_aluno'];
  }
  if(isset($_POST['nome_aluno'])){
    $NomeA = $_POST['nome_aluno'];
  }
  if(isset($_POST['datanas'])){
    $Data = $_POST['datanas'];
  }
  if(isset($_POST['email'])){
  $Email = $_POST['email'];
  }
  if(isset($_POST['cpf'])){
    $CPF = $_POST['cpf'];
  }
  
  $query = "INSERT INTO aluno(codigo_aluno, nome_aluno, datanas, email, cpf) 
  VALUES('$CodA', '$NomeA','$Data', '$Email', '$CPF')";
  
  mysqli_query($conexao, $query);
 
}
?>
</body>
</html>
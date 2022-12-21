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
    <a href="#">Curso</a> | 
    <a href="turma.php">Turma </a> | 
    <a href="aluno.php">Aluno</a> | 
    <a href="matricula.php">Matrícula</a>  
</div>

<!-- $PHP_SELF: maneira que o PHP se referencia a pagina atual -->
<form action="curso.php" method="POST"><br>
<fieldset class ="grupo">
<div class = "area">
Código Curso:<br><br><input type="text" name="codigo_curso" required>  <br><br>
Descrição  Curso:<br><br> <input type="text" name="Descricao" required><br><br>
Duração do Curso:<br><br> <input type="text" name="Duracao" required><br><br>
</div>

<!-- Submit button -->
<input class = "botao" type="submit" name="enviar" value="Enviar">
</form>
</fieldset>

<?php
include "conexao.php";
if(isset($_POST['enviar'])){
  if(isset($_POST['codigo_curso'])){
  $Codigo = $_POST['codigo_curso'];
  }
  if(isset($_POST['Descricao'])){
  $Descricao = $_POST['Descricao'];
   } 
  if(isset($_POST['Duracao'])){
   $Duracao   = $_POST['Duracao'];
  }
  
  $query = "INSERT INTO curso(codigo_curso, descricao_curso,duracao_curso) VALUES('$Codigo', '$Descricao','$Duracao')";
  
  mysqli_query($conexao, $query);
 
}
?>



</body>
</html>

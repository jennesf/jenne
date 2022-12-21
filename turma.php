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
    <a href="#">Turma </a> | 
    <a href="aluno.php">Aluno</a> | 
    <a href="matricula.php">Matrícula</a>  
</div>

<!-- $PHP_SELF: maneira que o PHP se referencia a pagina atual -->
<form action="turma.php" method="POST"><br>
<fieldset class ="grupo">
<div class = "area">
Turma:<br><br><input type="text" name="turma" required>  <br><br>
Código do Curso:<br><br> <input type="text" name="cod_curso" required><br><br>
Período:<br><br> <input type="text" name="periodo" required><br><br>
Horário:<br><br> <input type="text" name="hora" required><br><br>
</div>

<!-- Submit button -->
<input class = "botao" type="submit" name="enviar" value="Enviar">
</form>
</fieldset>

<?php
include "conexao.php";
if(isset($_POST['enviar'])){
  if(isset($_POST['turma'])){
  $Codturma = $_POST['turma'];
  }
  if(isset($_POST['cod_curso'])){
  $Codigo = $_POST['cod_curso'];
  }
  if(isset($_POST['periodo'])){
  $Period = $_POST['periodo'];
  }
  if(isset($_POST['hora'])){
  $Horario = $_POST['hora'];
  }
  
  $query = "INSERT INTO turma(codigo_turma, codigo_curso, periodo_turma, horario_turma) 
  VALUES('$Codturma', '$Codigo','$Period', '$Horario')";
  
  mysqli_query($conexao, $query);
 
}
?>

</body>
</html>
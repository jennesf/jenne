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
    <a href="aluno.php">Aluno</a> | 
    <a href="#">Matrícula</a>  
</div>

<!-- $PHP_SELF: maneira que o PHP se referencia a pagina atual -->
<form action="matricula.php" method="POST"><br>
<fieldset class ="grupo">
<div class = "area">
Código do Curso:<br><br> <input type="text" name="codigo_curso" required><br><br>  
Código do Aluno:<br><br><input type="text" name="codigo_aluno" required> <br><br>
Data de Matrícula:<br><br><input type="text" name="data_matricula" required> <br><br>
Turma:<br><br> <input type="text" name="codigo_turma" required><br><br>
</div>

<!-- Submit button -->
<input class = "botao" type="submit" name="enviar" value="Enviar">
</form>
</fieldset>

<?php
include "conexao.php";
if(isset($_POST['enviar'])){
if(isset($_POST['codigo_curso'])){
$Codig = $_POST['codigo_curso'];
}
if(isset($_POST['codigo_aluno'])){
$CodA = $_POST['codigo_aluno'];
} 
if(isset($_POST['data_matricula'])){
$Matricula = $_POST['data_matricula'];
}
if(isset($_POST['codigo_turma'])){
$Codturma = $_POST['codigo_turma'];
}
$query = "INSERT INTO matricula(codigo_curso, codigo_aluno, data_matricula, codigo_turma) 
VALUES('$Codig','$CodA','$Matricula','$Codturma')";
  
mysqli_query($conexao, $query);
}
?>
</body>
</html

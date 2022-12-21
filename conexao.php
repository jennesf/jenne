<?php
$servidor = '127.0.0.1'; //nosso servidor web localhost
$usuario  = 'root'; // usuário mysql
$senha = '1234'; // senha
$BancoDados = 'bd_cursos';  // Nome do Banco de Dados
try {
   $conexao = mysqli_connect ($servidor,$usuario,$senha,$BancoDados);   // fazer a conexão com o Banco de Dados]
}
catch (\Throwable $th)
{
throw $th;
}	
<?php

$localhost = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$dbname = "cadastro_escola";

$conexao = new mysqli($localhost, $usuario, $senha, $dbname);


if($conexao->connect_error) {
    die("Não foi possível realizar a conexão. : " . $conexao->connect_error);
}









//outra forma
// define('HOST', '127.0.0.1');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB', 'login');

// //conectando ao BD
 
// $conexao = new mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');


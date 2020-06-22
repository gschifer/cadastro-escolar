<?php 
session_start();
include('conexao.php');

//se o campo de login ou senha estiver vazio é redirecionado para a page de login

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
  header('Location: login-page.php');
  exit();
}

//pega o que o usuário digitou nos campos e guarda nessa variável
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);


$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}');";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
  $usuario_bd = mysqli_fetch_assoc($result);
  $_SESSION['nome'] = $usuario_bd['nome'];
  header('Location: painel.php');
  exit();

} else {
  $_SESSION['usuario_nao_habilitado'] = true;
  header('Location: login-page.php'); 
  exit();
}



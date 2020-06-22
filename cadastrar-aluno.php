<?php
    session_start();
    include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$data_nascimento = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
$bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
$rua = mysqli_real_escape_string($conexao, $_POST['rua']);
$numero = mysqli_real_escape_string($conexao, $_POST['numero']);
$complemento = mysqli_real_escape_string($conexao, $_POST['complemento']);
$sql = "select count(*) as total from alunos where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['aluno_existe'] = true;
    header('Location: page-cad-aluno.php');
    exit;
}

$sql = "INSERT INTO alunos (nome, sexo, data_nascimento, cidade, bairro, rua, numero, complemento)
 VALUES ('$nome', '$sexo', '$data_nascimento', '$cidade', '$bairro', '$rua', '$numero', '$complemento')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro_aluno'] = true;
}

$conexao->close();

header('Location: page-cad-aluno.php');
exit;


?>
<?php
include('conexao.php');
$turma_selecionada = mysqli_real_escape_string($conexao, $_POST['turma_selecionada']);
$aluno_selecionado = mysqli_real_escape_string($conexao, $_POST['aluno_selecionado']);
$sql = "UPDATE alunos SET turma = '$turma_selecionada' WHERE matrícula = '$aluno_selecionado'";

if ($conexao->query($sql) === TRUE) {
}

$conexao->close();

header('Location: vincular-page.php');
exit;

<?php
    session_start();
    include('conexao.php');
   


$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$quantidade_vagas = mysqli_real_escape_string($conexao, $_POST['quantidade_vagas']);
$nome_professor = mysqli_real_escape_string($conexao, $_POST['nome_professor']);

$sql = "select count(*) as total from turmas where descricao = '$descricao'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['turma_existe'] = true;
    header('Location: page-cad-turma.php');
    exit;
}

$sql = "INSERT INTO turmas (descricao, quantidade_vagas, nome_professor)
 VALUES ('$descricao', '$quantidade_vagas', '$nome_professor')";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro_turma'] = true;
}

$conexao->close();

header('Location: page-cad-turma.php');
exit;

?>

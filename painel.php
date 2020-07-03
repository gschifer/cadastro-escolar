<?php
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style/design.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="painel.php" class="navbar-brand ml-5">Escola X</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item ">
                    <a class=" btn btn-success btn-md" href="logout.php">Sair</a>
                </li>
        </div>
    </nav>

    <div class=" col-md-12 container mt-5 jumbotron">
        <h1 class="display-4">Bem vindo(a), <?php echo $_SESSION['nome']; ?>!</h1>
        <p class="lead">
            Clique nos botões abaixo para realizar o cadastro de um <b>aluno</b>, <b>turma</b> ou realizar a <b>inclusão</b> de um aluno dentro de uma turma.
            Se necessário, você pode <b>consultar</b> alunos e turmas.
        </p>
        <hr class="my-4">
        <div class="d-flex justify-content-around">
            <a class="btn btn-primary  btn-lg" href="page-cad-aluno.php" role="button">Alunos</a>
            <a class="btn btn-success  btn-lg" href="page-cad-turma.php" role="button">Turmas</a>
            <a class="btn btn-warning  btn-lg" href="vincular-page.php" role="button">Inclusão</a>
            <a class="btn btn-info  btn-lg" href="consulta.php" role="button">Consultar </a>
        </div>
    </div>
</body>

</html>

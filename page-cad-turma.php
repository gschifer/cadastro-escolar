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
                <a href="painel.php" class="nav-link mr-3">Painel</a>
              </li>
              <li class="nav-item ">
                 <a class="btn btn-success" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
      </nav>

    <form action="cadastrar-turma.php" method="POST" class="container border rounded my-5 p-4">
        <h1 class="mb-4 display-4"><svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
        </svg>Cadastro de turmas</h1>
        <?php
        if($_SESSION['status_cadastro_turma']):
        ?>
        <div class="alert alert-success">
            Turma cadastrada com sucesso!
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro_turma']);
        ?>
        <?php
        if($_SESSION['turma_existe']):
        ?>
        <div class="alert alert-danger">
            A descrição dessa turma já existe, escolha outra descrição. 
        </div>
        <?php
        endif;
        unset($_SESSION['turma_existe']);
        ?>
        <div class="form-row">
          <div class="form-group col-md-12">
              <label>Descrição</label>
              <input required type="text" name="descricao" class="form-control">  
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Quantidade de vagas</label>
            <input required type="number" name="quantidade_vagas" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Nome do professor</label>
            <input required type="text" name="nome_professor" class="form-control" >
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>
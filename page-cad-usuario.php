<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="views/style/design.css">
    <title>Document</title>
</head>
<body>

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
          <a href="index.php" class="navbar-brand ml-5">Escola X</a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item ">
                <a href="" class=" btn btn-outline-success ">Cadastrar</a>
              </li>
          </div>
      </nav>

      <form action="cadastrar-usuario.php" class="container border border-radius mt-5 rounded" method="POST">
        <h1>Cadastro</h1>
        <?php
        if($_SESSION['status_cadastro']):
        ?>
        <div class="alert alert-success">
            Usuário cadastrado com sucesso!
            <p>Faça login informando seu usuário e senha <a href="index.php">aqui.</a></p>
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>
        <?php
        if($_SESSION['usuario_existe']):
        ?>
        <div class="alert alert-danger">
            O usuário escolhido já existe. Informe outro e tente novamente.
        </div>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>
       
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" class="form-control" name="usuario" placeholder="Digite seu usuário">
        </div>
        <div class="form-group">
            <label >Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary" value="acessar">Enviar</button>
    </form>
</body>

<?php

session_start();

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
            <a href="" class="navbar-brand ml-5">Escola X</a>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item ">
                  <a href="page-cad-usuario.php" class=" btn btn-outline-success">Cadastrar</a>
                </li>
              </ul>
            </div>
        </nav>

        <form action="login.php" class="container border border-radius p-4 rounded" id="login" method="POST">
          <h1>Acesso</h1>
          <?php
            if(isset($_SESSION['usuario_nao_habilitado'])):
          ?>
            <div class="alert alert-danger">
              ERRO: Usuário ou senha incorretos.
            </div>
          <?php
          endif;
          unset($_SESSION['usuario_nao_habilitado']);
          ?>
          <div class="form-group">
              <label>Usuário</label>
              <input type="text" class="form-control" name="usuario" placeholder="Digite seu usuário">
          </div>
          <div class="form-group">
              <label>Senha</label>
              <input type="password" name="senha" class="form-control" placeholder="Senha">
          </div>
          <button type="submit" class="btn btn-primary" value="acessar">Enviar</button>
      </form>
  </body>
</html>




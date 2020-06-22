<?php
//antes de entrar na sessão de cadastro do aluno, ele verifica se o usuário está logado
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
              <li class="nav-item">
                <a href="painel.php" class=" mr-3 nav-link">Painel</a>
              </li>
              <li class="nav-item ">
                 <a class="btn btn-success " href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
      </nav>

    <form class="container border rounded my-5 p-4" method="POST" action="cadastrar-aluno.php" >
        <h1 class="mb-4 display-4 col-md-12"><svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
        </svg>Cadastro de aluno</h1>
        <?php
        if($_SESSION['status_cadastro_aluno']):
        ?>
        <div class="alert alert-success">
            Aluno cadastrado com sucesso!
        </div>
        <?php
        endif;
        unset($_SESSION['status_cadastro_aluno']);
        ?>
        <?php
        if($_SESSION['aluno_existe']):
        ?>
        <div class="alert alert-danger">
            O aluno escolhido já está cadastrado em nosso sistema. 
        </div>
        <?php
        endif;
        unset($_SESSION['aluno_existe']);
        ?>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Nome:</label>
            <input required name="nome" type="text" class="form-control ">  
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Data de Nascimento</label>
            <input name="data_nascimento" required type="date" class="form-control">
          </div>
          <div class="form-group col-md-4">
            <label>Sexo</label>
            <Select name="sexo" required class="form-control ">
              <option value="">Escolha seu sexo.</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
            </Select>
          </div>
          <div class="form-group col-md-4">
            <label>Cidade</label>
            <input name="cidade" type="text" class="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Bairro</label>
            <input name="bairro" type="text" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Rua</label>
            <input name="rua"  type="text" class="form-control">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Número</label>
            <input name="numero" type="number" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Complemento</label>
            <input name="complemento" type="text" class="form-control">
          </div>
        </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
</body>
</html>
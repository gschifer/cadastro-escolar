<?php

  include('conexao.php');
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
          <a href="/Tarefa%20Estágio/painel.php" class="navbar-brand ml-5">Escola X</a>
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


    <?php

    if(isset($_POST['delete'])) {
      $sql ="DELETE FROM alunos WHERE matrícula=". $_POST['matricula'];
      if($conexao->query($sql) === TRUE){
        echo "<div class='alert alert-warning container text-center mt-5'>Usuário deletado com sucesso</div>";
      }
    }

    $sql = "SELECT * FROM alunos";
    $result = $conexao->query($sql);

    if($result->num_rows > 0)
    {
      ?>
      <table class="table container mt-3">
        <thead class="thead-dark">
            <tr>
            <th class="text-center" scope="col">Matrícula</th>
            <th class="text-center" scope="col">Nome</th>
            <th class="text-center" scope="col">Data de Nascimento</th>
            <th class="text-center" scope="col">Sexo</th>
            <th class="text-center" scope="col">Cidade</th>
            <th class="text-center" scope="col">Bairro</th>
            <th class="text-center" scope="col">Rua</th>
            <th class="text-center" scope="col">Número</th>
            <th class="text-center" scope="col">Complemento</th>
            <th class="text-center" scope="col">Deletar</th>
            <th class="text-center" scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
    
      <?php
      while( $row = $result->fetch_assoc()){ 
        echo "<form action='' method='POST'>";	
        echo "<input type='hidden' value='". $row['matrícula']."' name='matricula' />"; 
        echo "<tr>";
        echo "<td class='text-center'>".$row['matrícula'] . "</td>";
        echo "<td class='text-center'>".$row['nome'] . "</td>";
        echo "<td class='text-center'>".$row['data_nascimento'] . "</td>";
        echo "<td class='text-center'>".$row['sexo'] . "</td>";
        echo "<td class='text-center'>".$row['cidade'] . "</td>";
        echo "<td class='text-center'>".$row['bairro'] . "</td>";
        echo "<td class='text-center'>".$row['rua'] . "</td>";
        echo "<td class='text-center'>".$row['numero'] . "</td>";
        echo "<td class='text-center'>".$row['complemento'] . "</td>";
        echo "<td class='text-center'><input type='submit' name='delete' value='Excluir' class='btn btn-danger' /></td>";  
        echo "<td class='text-center'><a href='edit-aluno.php?id=".$row['matrícula']."' class='btn btn-info'>Editar</a></td>";
        echo "</tr>";
        echo "</form>"; 
      }
      ?>
      </table>

      <?php 
    }
    else
    {
      echo "<div class='container mt-5 text-center'> Não há alunos cadastrados no momento.";
    }
      ?> 

 
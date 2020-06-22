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
          <a href="painel.php" class="navbar-brand ml-5">Escola X</a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mr-5">
              <li class="nav-item">
                <a href="painel.php" class=" mr-3 nav-link">Painel</a>
              </li>
              <li class="nav-item ">
                 <a class="btn btn-success" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
      </nav>


    <?php

    if(isset($_POST['delete'])) {
      $sql ="DELETE FROM turmas WHERE numero_turma=". $_POST['numero_turma'];
      if($conexao->query($sql) === TRUE){
        echo "<div class='alert alert-warning container text-center mt-5'>Turma excluída com sucesso</div>";
      }
    }

    $sql = "SELECT * FROM turmas";
    $result = $conexao->query($sql);

    if($result->num_rows > 0)
    {
      ?>
      <table class="table container mt-3">
        <thead class="thead-dark">
            <tr>
            <th class="text-center" scope="col">Número da turma</th>
            <th class="text-center" scope="col">Descrição</th>
            <th class="text-center" scope="col">Quantidade de vagas</th>
            <th class="text-center" scope="col">Nome do professor</th>
            <th class="text-center" scope="col">Deletar</th>
            <th class="text-center" scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
    
      <?php
      while( $row = $result->fetch_assoc()){ 
        echo "<form action='' method='POST'>";	
        echo "<input type='hidden' value='". $row['numero_turma']."' name='numero_turma' />"; 
        echo "<tr>";
        echo "<td class='text-center'>".$row['numero_turma'] . "</td>";
        echo "<td class='text-center'>".$row['descricao'] . "</td>";
        echo "<td class='text-center'>".$row['quantidade_vagas'] . "</td>";
        echo "<td class='text-center'>".$row['nome_professor'] . "</td>";
        echo "<td class='text-center'><input type='submit' name='delete' value='Excluir' class='btn btn-danger' /></td>";  
        echo "<td class='text-center'><a href='edit-turmas.php?id=".$row['numero_turma']."' class='btn btn-info'>Editar</a></td>";
        echo "</tr>";
        echo "</form>"; 
      }
        ?>
        </table>
    <?php 
    }
    else
    {
      echo "<div class='container mt-5 text-center'> Não há turmas cadastradas no momento.";
    }
    ?> 
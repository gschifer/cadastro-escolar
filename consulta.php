

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

          <div class=" col-md-12 container mt-5 jumbotron">
                <h1 class="display-4">O que você deseja consultar?</h1>
                <p class="lead text-center pt-4">Clique em <b>alunos</b> ou <b>turmas</b> para consultá-los.
                <hr class="my-4">
                <div class="d-flex justify-content-around">
                    <a class="btn btn-primary w-25 btn-lg" href="consulta-alunos.php">Alunos</a>              
                    <a class="btn btn-success w-25 btn-lg" href="consulta-turmas.php">Turmas</a>
                </div>
        </div>
    </body>
</html>
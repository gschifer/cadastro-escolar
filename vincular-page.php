<?php

include('verifica_login.php');
include('conexao.php');
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

    <form method="POST" action="vincula_controller.php">
        <div class=" col-md-12 container mt-5 jumbotron">
            <h1 class="display-4">Inclusão
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z" />
                    <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z" />
                </svg>
            </h1>
            <p class="lead text-center mt-3 font-weight-normal">
                Selecione o aluno que deseja incluir na turma selecionada.
            </p>
            <div>
                <div class="form-group mt-5">
                    <label for="exampleFormControlSelect2">Alunos cadastrados</label>
                    <select multiple class="form-control" name="aluno_selecionado" id="exampleFormControlSelect2">
                        <?php

                        $select = "SELECT * FROM alunos";
                        $result = $conexao->query($select);

                        if ($result->num_rows === 0) {
                            echo "<option class='text-danger'>Não há alunos cadastrados no momento.</option>";
                        } else {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['matrícula'] . "'>" . $row['nome'] . "</option>";
                            }
                        }

                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Turmas cadastradas</label>
                    <select multiple class="form-control" name="turma_selecionada" id="exampleFormControlSelect2">
                        <?php

                        $select = "SELECT * FROM turmas";
                        $result = $conexao->query($select);

                        if ($result->num_rows === 0) {
                            echo "<option class='text-danger'>Não há turmas cadastradas no momento.</option>";
                        } else {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['numero_turma'] . "'>" . "Turma: " .
                                    $row['numero_turma'] . " - Professor: " . $row['nome_professor'] . " 
                                    - Quantidade de vagas: " . $row['quantidade_vagas'] . "</option>";
                            }
                        }

                        ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success w-100 mt-3">Vincular</button>
        </div>
    </form>




</body>

</html>

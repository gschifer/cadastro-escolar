<?php
session_start();
//se a sessao do usuario não existir redireciona para o campo de login
if(!$_SESSION['nome']) {
    header('Location: login-page.php');
    exit();
}
<?php
session_start();

// método que verifica o login e senha
if($_POST['usuario'] == 'mardegan' && $_POST['senha'] == '123'){
    $_SESSION['usuario'] = $_POST['usuario'];
    header('Location: ../../view/home.php');
}else{
    header('Location: ../../login.php?erro=erroLogin');
}
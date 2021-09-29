<?php
session_start();
include_once('../model/Usuario.php');
include_once('../model/UsuarioModel.php');

//mardegan - cerveja
//torres - vodca
//leo - vinho
//glener - whisky

//verifica o login e senha
$usuario = UsuarioModel::getInstance();
$user = $usuario->getUsuarioNome($_POST['usuario']);

if($user->getNome() != null){
    if( strcasecmp($user->getSenha(), md5($_POST['senha'])) == 0){
        $_SESSION['usuario'] = $_POST['usuario'];
        header('Location: ../../view/home.php');
    }else{
        header('Location: ../../login.php?erro=erroLogin');
    }
}else{
    header('Location: ../../login.php?erro=erroLogin');
}

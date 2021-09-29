<?php
session_start();
include_once('../model/Produto.php');
include_once('../model/ProdutoModel.php');


$produto = ProdutoModel::getInstance();
$user = $produto->getProduto(1);


var_dump($user->getDescricao());
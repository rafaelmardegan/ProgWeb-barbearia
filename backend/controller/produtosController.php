<?php
session_start();
include_once('../model/Produto.php');
include_once('../model/ProdutoModel.php');

$produto = ProdutoModel::getInstance();

$operacao = $_POST['operacao'];

switch ($operacao) {
    case 'listar':
        $prod = array();
        $produtos = array();
        foreach($produto->getProdutos() as $prod) {
            $prod = array('descricao' => $prod->getDescricao(),
                        'preco' => $prod->getPreco(),
                        'nomeImg' => $prod->getNomeImg(),
                        'nomeImgHash' => $prod->getNomeImgHash(),
                        'diretorio' => $prod->getDiretorio()    
            );
           array_push($produtos, $prod); 
        }
        

        echo json_encode($produtos);
        break;
    
    default:
        # code...
        break;
}
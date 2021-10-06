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
    case 'adicionar' :
        if (!empty($_FILES['fileimagem']))
        {
            $produto = new Produto();
            $novo_nome = md5(time()).mt_rand(5, 100).".JPG";
            $file_path = $_FILES['tmp_name'];
            $diretorioReal = "../view/imagens/produtos/"; 


            echo move_uploaded_file($_FILES['fileimagem']['tmp_name'], 'img/'.$_FILES['fileimagem']['name']);       
        }
        else
        {
            echo 'false';
        }

        break;
    
    default:
        # code...
        break;
}
<?php
session_start();
include_once('../model/Servico.php');
include_once('../model/ServicoModel.php');

$servico = ServicoModel::getInstance();

$operacao = $_POST['operacao'];

// $serv = $servico->getServicos();

// var_dump($serv);

switch ($operacao) {
    case 'listar':
        $serv = array();
        $servicos = array();
        foreach($servico->getServicos() as $serv) {
            $serv = array('descricao' =>  $serv->getDescricao(),
                        'preco' =>  $serv->getPreco(),
                        'nomeImg' =>  $serv->getNomeImg(),
                        'nomeImgHash' =>  $serv->getNomeImgHash(),
                        'diretorio' =>  $serv->getDiretorio(),
                        'link' =>  $serv->getLink()       
            );
           array_push($servicos, $serv); 
        }
        

        echo json_encode($servicos);
        break;
    
    default:
        # code...
        break;
}
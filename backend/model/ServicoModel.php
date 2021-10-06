<?php 
require_once "../core/Conexao.php";
require_once "Servico.php";

class ServicoModel{

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ServicoModel();

        return self::$instance;
    }

    public function getServicos() {
        try {
            $sql = "SELECT * FROM servicos";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            return $this->populaServicos($p_sql);
        } catch (Exception $e) {

        }
    }

    private function populaServicos($rows) {
        $servicos = array();
        while($servico = $rows->fetch(PDO::FETCH_ASSOC)){
            $serv = new Servico;
            $serv->setId($servico['id']);
            $serv->setDescricao($servico['descricao']);
            $serv->setPreco($servico['preco']);
            $serv->setNomeImgHash($servico['nomeImgHash']);
            $serv->setNomeImg($servico['nomeImg']);
            $serv->setDiretorio($servico['diretorio']);
            $serv->setLink($servico['link']);

            $servicos[] = $serv;
        }
        return $servicos;
    }

    public function getServico($id) {
        try {
            $sql = "SELECT * FROM servicos WHERE id = :id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->populaServico($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {

        }
    }

    private function populaServico($row) {
        $serv = new Servico;
        if(isset($row['id'])){
            $serv->setId($row['id']);
            $serv->setDescricao($row['descricao']);
            $serv->setPreco($row['preco']);
            $serv->setNomeImgHash($row['nomeImgHash']);
            $serv->setNomeImg($row['nomeImg']);
            $serv->setDiretorio($row['diretorio']);
            $serv->setLink($row['link']);
        }
        
        return $serv;
    }
}
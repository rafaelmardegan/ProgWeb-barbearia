<?php 
require_once "../core/Conexao.php";
require_once "Produto.php";

class ProdutoModel{

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new ProdutoModel();

        return self::$instance;
    }

    public function getProdutos() {
        try {
            $sql = "SELECT * FROM produtos";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            return $this->populaProdutos($p_sql);
        } catch (Exception $e) {

        }
    }

    private function populaProdutos($rows) {
        $produtos = array();
        while($produto = $rows->fetch(PDO::FETCH_ASSOC)){
            $prod = new Produto;
            $prod->setId($produto['id']);
            $prod->setDescricao($produto['descricao']);
            $prod->setPreco($produto['preco']);
            $prod->setNomeImgHash($produto['nomeImgHash']);
            $prod->setNomeImg($produto['nomeImg']);
            $prod->setDiretorio($produto['diretorio']);

            $produtos[] = $prod;
        }
        return $produtos;
    }

    public function getProduto($id) {
        try {
            $sql = "SELECT * FROM produtos WHERE id = :id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->populaProduto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {

        }
    }

    private function populaProduto($row) {
        $prod = new Produto;
        if(isset($row['id'])){
            $prod->setId($row['id']);
            $prod->setDescricao($row['descricao']);
            $prod->setPreco($row['preco']);
            $prod->setNomeImgHash($row['nomeImgHash']);
            $prod->setNomeImg($row['nomeImg']);
            $prod->setDiretorio($row['diretorio']);
        }
        
        return $prod;
    }

// EXEMPLO PARA INSERIR
    public function adicionar(Produto $produto) {
        try {
            $sql = "INSERT INTO produtos (
                descricao,
                preco,
                nomeImgHash,
                nomeImg,
                diretorio)
                VALUES (
                :descricao,
                :preco,
                :nomeImgHash,
                :nomeImg,
                :diretorio)";

            $p_sql = Conexao::getInstance()->prepare($sql);

            $p_sql->bindValue(":descricao", $produto->getDescricao());
            $p_sql->bindValue(":preco", $produto->getPreco());
            $p_sql->bindValue(":nomeImgHash", $produto->getNomeImgHash());
            $p_sql->bindValue(":nomeImg", $produto->getNomeImg());
            $p_sql->bindValue(":diretorio", $produto->getDiretorio());
            $p_sql->execute();
        } catch (Exception $e) {
            return false;

        }
    }
}
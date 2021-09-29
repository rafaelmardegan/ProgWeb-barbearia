<?php
class Produto{

    private $id;
    private $descricao;
    private $preco;
    private $nomeImgHash;
    private $nomeImg;
    private $diretorio;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of nomeImgHash
     */ 
    public function getNomeImgHash()
    {
        return $this->nomeImgHash;
    }

    /**
     * Set the value of nomeImgHash
     *
     * @return  self
     */ 
    public function setNomeImgHash($nomeImgHash)
    {
        $this->nomeImgHash = $nomeImgHash;

        return $this;
    }

    /**
     * Get the value of nomeImg
     */ 
    public function getNomeImg()
    {
        return $this->nomeImg;
    }

    /**
     * Set the value of nomeImg
     *
     * @return  self
     */ 
    public function setNomeImg($nomeImg)
    {
        $this->nomeImg = $nomeImg;

        return $this;
    }

    /**
     * Get the value of diretorio
     */ 
    public function getDiretorio()
    {
        return $this->diretorio;
    }

    /**
     * Set the value of diretorio
     *
     * @return  self
     */ 
    public function setDiretorio($diretorio)
    {
        $this->diretorio = $diretorio;

        return $this;
    }
}
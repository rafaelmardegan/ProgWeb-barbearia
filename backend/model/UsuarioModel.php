<?php 
require_once "../core/Conexao.php";
require_once "Usuario.php";

 class UsuarioModel{

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioModel();

        return self::$instance;
    }
    public function getUsuarios() {
        try {
            $sql = "SELECT * FROM usuarios";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->execute();
            return $this->populaUsuarios($p_sql);
        } catch (Exception $e) {

        }
    }
    public function getUsuario($id) {
        try {
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {

        }
    }
    public function getUsuarioNome($usuario) {
        try {
            $sql = "SELECT * FROM usuarios WHERE usuario = :usuario";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":usuario", $usuario);
            $p_sql->execute();
            return $this->populaUsuario($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {

        }
    }

    private function populaUsuario($row) {
        $user = new Usuario;
        if(isset($row['id'])){
            $user->setId($row['id']);
            $user->setNome($row['usuario']);
            $user->setSenha($row['senha']);
        }


        return $user;
    }
    private function populaUsuarios($rows) {
        $usuarios = array();
        while($usuario = $rows->fetch(PDO::FETCH_ASSOC)){
            $user = new Usuario;
            $user->setId($usuario['id']);
            $user->setNome($usuario['usuario']);
            $user->setSenha($usuario['senha']);

            $usuarios[] = $user;
        }
        return $usuarios;
    }
  
}
?>
<?php
class Conexao {

    public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost:3306;dbname=pampabarber', 'root', 'fernandobaterias5',
 array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS,
            PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

}
// exemplo table
// create table nomeTabela(

//     id int(11) not null auto_increment,
//     nome varchar(200) not null,
//     primary key(id)
    
//     );
?>
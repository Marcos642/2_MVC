<?php
require_once 'Conexao.php';
class Camisas{
    private $con;
    public function __construct(){
        GLOBAL $con;
        $con = Conexao::getConexao();
    }
}
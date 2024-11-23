<?php
class Conexao{
    private static $instancia;
    private function __construct(){}

    public static function getConexao(){
        Global $instancia;
        if(!isset($instancia)){
            $dbname = "aula5_mvc";
            $host = "localhost";
            $user = "root";
            $senha = "";
    
            try {
                $instancia = new PDO("mysql:dbname=".$dbname.";host=".$host,$user.$senha);
            } catch (Exception $e) {
                echo "Erro: ".$e;
            }
        }
        return $instancia;
    }
}
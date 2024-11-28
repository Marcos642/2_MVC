<?php
require_once 'Conexao.php';
class noticia{
    private $con;
    public function __construct(){
        GLOBAL $con;
        $con = Conexao::getConexao();
    }

    public function getNoticia(){
        GLOBAL $con;
        $dados = [];
        $cmd = $con->query("SELECT a.id_noticia,
                                   a.titulo, 
                                   a.nome_imagem, 
                                   a.texto, 
                                   a.fk_id_tipo_noticia, 
                                   b.descricao 
                                   FROM noticia a 
                                   INNER JOIN tipo_noticia b 
                                   ON a.fk_id_tipo_noticia = b.id_tipo");
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function noticiaPorId($id){
        GLOBAL $con;
        $dados = []; 
        $cmd = $con->prepare("SELECT a.*, b.descricao
                              FROM noticia a
                              INNER JOIN tipo_noticia b
                              ON a.fk_id_tipo_noticia = b.id_tipo
                              WHERE a.id_noticia = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        return $dados;
    }
}
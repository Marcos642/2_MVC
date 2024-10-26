<?php 
class Controller{ // A controller segue sempre essa estrutura:
    public $dados;
    public function __construct(){
        $this->dados = array();
    }
    //  No metodo index
    public function carregarTemplate($nomeView, $dadosModel = array()){
        $this->dados = $dadosModel;
        require "Views/template.php";
    }
    // Em template em views
    public function carregarViewNoTemplate($nomeView, $dadosModel = array()){
        // Transformar chave em variável, ex: ['nome'] = 'marcos' fica: $nome = 'marcos'
        extract($dadosModel); 
        require 'Views/'.$nomeView.'.php';
    }
}
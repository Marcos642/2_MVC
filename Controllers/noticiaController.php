<?php
class noticiaController extends Controller{
    public function index(){
        $n = new noticia;
        $dados = $n->getNoticia();
        $this->carregarTemplate("noticia",  array(), $dados);
    }

    public function entreterimento(){
        echo "Página entreteniento";
        exit;
        $this->carregarTemplate("entreterimento");
    }

    public function futebol(){
        echo "Página futebol";
        exit;
        $this->carregarTemplate("futebol");
    }
}
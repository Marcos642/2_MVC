<?php
class noticiaController extends Controller{
    public function index(){
        $n = new noticia;
        $dados = $n->getNoticia();
        $this->carregarTemplate("noticia",  array(), $dados);
    }

    public function entreterimento($id_noticia){
        $c = new noticia();
        $dados = $c->noticiaPorId($id_noticia);
        $this->carregarTemplate("entreterimento",$dados);
    }

    public function futebol($id_noticia){
        $c = new noticia();
        $dados = $c->noticiaPorId($id_noticia);
        $this->carregarTemplate("futebol",$dados);
    }
}
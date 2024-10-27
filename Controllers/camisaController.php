<?php
class camisaController extends Controller{
    public function index(){
        $dados['nome'] = "Marcos";
        $dados['idade'] = 24;
        $this->carregarTemplate("camisa", $dados);
    }

    public function getCamisa(){
        $this->carregarTemplate("getCamisa");
    }
}
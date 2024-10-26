<?php
class erroController extends Controller{
    public function index(){
    // 1) chamar um model
        // $u = new usuarios;
        // $dados = $u->getDadosUsuario();
    // 2) chamar uma view
    // 3) fazer junção de back end com front end
        $this->carregarTemplate('erro');
    }
}
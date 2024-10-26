<?php
class camisaController extends Controller{
    public function index(){
        $this->carregarTemplate("camisa");
    }

    public function getCamisa(){
        $this->carregarTemplate("getCamisa");
    }
}
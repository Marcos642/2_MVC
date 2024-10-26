<?php 
# O valor de $nameFile é atribuído quando uma nova instância de uma classe é criada
# É pego o nome do arquivo e salvo na variavel $nome_arquivo 

spl_autoload_register(function($nome_arquivo){
    if(file_exists('Controllers/'.$nome_arquivo.'.php')){
        require 'Controllers/'.$nome_arquivo.'.php';

    }elseif(file_exists('Models/'.$nome_arquivo.'.php')){
        require 'Models/'.$nome_arquivo.'.php';

    }elseif(file_exists('Core/'.$nome_arquivo.'.php')){
        require 'Core/'.$nome_arquivo.'.php';
    }
});
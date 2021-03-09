<?php

namespace App\Controller;

use App\Model\FilmeRepository;

class ListarFilmes {

    private $lista;
    
    public function __construct() {

        $this->lista = new FilmeRepository;
        $this->processaRequisicao();
    }

    public function processaRequisicao() {
        
        $row = $this->lista->getFilmes();
        return $row;
        
    }

    public function buscarPorNome($nome){
        $row = $this->lista->searchForName($nome);
        // echo 'asj';var_dump($row);die;
        return $row;
    }
    
    
}


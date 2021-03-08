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
        
//         var_dump(is_array($row));
        
    }
    
    
}


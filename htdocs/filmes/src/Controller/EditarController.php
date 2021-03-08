<?php
namespace App\Controller;

use App\Model\FilmeRepository;

class EditarController extends FilmeRepository{

    private $lista;

    public function __construct($id)
    {

        $this->lista = new FilmeRepository;
        $this->processaRequisicao($id);
    }

    public function processaRequisicao($id) {
        
        $row = $this->lista->searchForId($id);
        $arr = array_values($row);
        
       return $arr;
       
    }

}
<?php

namespace App\Controller;

use App\Controller\InserirController;

require_once __DIR__ . '/../../vendor/autoload.php';

$obFilme = $_POST;
$inserir = new Filter($obFilme);

class Filter
{

    public function __construct($obFilme)
    {   
        $this->filtrar($obFilme);
    }

    private function filtrar($data)
    {

        if (!filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING)) {
            echo("Nome invalido");die;
        } 
        if (!filter_input(INPUT_POST, "genero", FILTER_SANITIZE_STRING)) {
            echo("Genero invalido");die;
        } 
        if (!filter_input(INPUT_POST, "valor", FILTER_SANITIZE_NUMBER_FLOAT)) {
            echo("Valor invalido");die;
        } 

        new InserirController($data);
    }

}

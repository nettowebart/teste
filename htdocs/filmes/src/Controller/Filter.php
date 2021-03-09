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
        if(isset($data['buscaNome'])){
            $teste = $this->filtroBuscaNome($data['buscaNome']);
            // echo 'asui'; var_dump($teste);die;
            return $teste;
        }

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

    private function filtroBuscaNome($nome){
        // var_dump($nome);die;
        if (!filter_input(INPUT_POST, "buscaNome", FILTER_SANITIZE_STRING)) {
            echo ("Nome Invalido");die;
        } 
        $lista = new ListarFilmes;
        $retorno = $lista->buscarPorNome($nome);
        // var_dump($retorno);die;
        return (json_encode($retorno));

    }
}

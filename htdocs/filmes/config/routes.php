<?php

use App\Controller\FormularioInsert;
use App\Controller\ListarFilmes;
use App\Controller\Persistencia;

//não ta funcionando ainda

$rotas = [
    'filmes/view/filmes/listaFilmes.php' => ListarFilmes::class,
    '/filmes/view/filmes/formularioFilmes.php' => FormularioInsert::class,
    
    'salvarCurso' => Persistencia::class,
    // '/filmes/view/filmes/formularioFilmes.php' => FormularioInsert::class,
];

return $rotas;


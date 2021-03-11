<?php

require __DIR__.'/vendor/autoload.php';

// var_dump($_SERVER);die;
$caminho = $_SERVER['REQUEST_URI'];
$rotas = require __DIR__ . '/config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}
// echo $rotas[$caminho];
$classeControladora = $rotas[$caminho];

echo $classeControladora;
// $controlador = new $classeControladora();

// $controlador->processaRequisicao();

// echo $_SERVER["REQUEST_URI"];

// echo Home::getHome();


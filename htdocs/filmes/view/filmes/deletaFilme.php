<?php

use App\Controller\DeletarController;

require_once __DIR__ . '/../../vendor/autoload.php';


$id = $_GET['id'];

$valida = new DeletarController($id);

// $valida->processaRequisicao();
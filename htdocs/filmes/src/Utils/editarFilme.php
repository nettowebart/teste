<?php
namespace App\Utils;

use App\Controller\EditarController;

require_once __DIR__ . '/../../vendor/autoload.php';

// var_dump($_GET);die;
$id = $_GET["id"];

$validado = new EditarController($id);
$values = $validado->processaRequisicao($id);
// var_dump($values);die;


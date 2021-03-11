<?php
namespace App\Utils;

use App\Controller\DeletarController;

require_once __DIR__ . '/../../vendor/autoload.php';

// var_dump($_SERVER);die;
$id = $_GET['id'];

$valida = new DeletarController($id);

<?php
namespace App\Controller;

use App\Controller\InserirController;

require_once __DIR__ . '/../../vendor/autoload.php';

$obFilme = $_POST;
$inserir = new InserirController($obFilme);



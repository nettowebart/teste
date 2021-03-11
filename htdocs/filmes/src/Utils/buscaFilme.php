<?php
namespace App\Utils;

use App\Model\FilmeRepository;
use App\Controller\ListarFilmes;
use App\Model\Repository\FilmeRepository as RepositoryFilmeRepository;

require_once __DIR__ . '/../../vendor/autoload.php';
// echo 'teste';die;
// var_dump($_SERVER["QUERY_STRING"]);die;
$nome = $_GET;
$teste = array_keys($nome);

$lista = new RepositoryFilmeRepository;
// var_dump($teste[0]);die;

$result = $lista->searchForName($teste[0]);
// var_dump($result);die;
echo json_encode($result);


?>


<?php

namespace App;

use App\Controller\FormularioInsert;
use App\Controller\ListarFilmes;
use App\Controller\DeletarController;
use App\Model\FilmeRepository;
use App\Model\Entity\Filmes;

require_once __DIR__ . '/vendor/autoload.php';

$teste = new FilmeRepository;
// print_r($teste);



include __DIR__ . '/view/header.php';

$teste = new ListarFilmes();
$raiva = $teste->processaRequisicao();
// var_dump($raiva);die;
?>
<style>
body {
  background-color: beige;
}
#botao{
    margin-left: 750px;
    /* margin-bottom: 25px; */
}
.table{
    border-style: double;
    border-color: coral;
    background: #ffa;
}
</style>
<body>
    
    <a href="/filmes/view/filmes/formularioFilmes.php">
        <button>Adicionar Filmes</button>
    </a>
    <a id="botao" href="/filmes/view/filmes/buscaFilme.php">
        <button>Busca Filme por nome</button>
    </a>
    
    <table class="table" >
        <thead>
            <tr>
                <th>Nome</th>
                <th>Genero</th>
                <th>Valor</th>
                <th>Data Lançamento</th>
                <th>imagem</th>
                <th>Opções</th>
            </tr>
            <?php foreach ($raiva as $curso): ?>
            <tr>
                <td><?php echo $curso['nome'] ?></td>
                <td><?php echo $curso['genero'] ?></td>
                <td><?php echo $curso['valor'] ?></td>
                <td><?php 
                    $date = strtotime($curso['dataLancamento']); 
                    echo date('d/m/Y ', $date)
                ?></td>
                <td><?php echo $curso['imagem'] ?></td>
                <td><a type="button"class="btn btn-primary" href="/filmes/view/filmes/editarFilme.php?id=<?php echo $curso['id'] ?>" method="post"> editar</a>
                    <a type="button"class="btn btn-danger" href="/filmes/view/filmes/deletaFilme.php?id=<?php echo $curso['id'] ?>" method="post"> Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </thead>
        <tbody>
    </table>
            <?php// var_dump($raiva);?>
    </ul>
    
<?PHP
include __DIR__ . '/view/footer.php';
?>

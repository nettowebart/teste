<!DOCTYPE html>

<?php use App\Controller\ListarFilmes;?>
<?php include __DIR__ . '/../header.php';?>
<?php

 
?>
<body>
    
    <a href="/filmes/view/filmes/formularioFilmes.php">
        <button>Adicionar Filmes</button>
    </a>
    
   <?php include("menu.php"); ?>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Genero</th>
                <th>Valor</th>
                <th>Data Lançamento</th>
               <th>Opções</th>
            </tr>
         <ul class="list-group">
          <?php 
            $cursor = new ListarFilmes();
            var_dump($cursor);die;
          ?>
        <?php foreach ($cursor as $curso): ?>
            <li class="list-group-item">
                <?= $curso->getDescricao(); ?>
            </li>
        <?php endforeach; ?>
        </ul>

        </thead>
        <tbody>
            <?php // new listarController();  ?>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
<!--    <ul class="list-group">
        <?php // foreach ($data as $curso): ?>
            <li class="list-group-item">
                //<?= $curso->getValor(); ?>
            </li>
        <?php // endforeach; ?>
    </ul>-->

<?php include __DIR__ . '/../footer.php';?>


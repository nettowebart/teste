<?php

use App\Controller\EditarController;

require_once __DIR__ . '/../../vendor/autoload.php';

// var_dump($_GET);die;
$id = $_GET["id"];

$validado = new EditarController($id);
$values = $validado->processaRequisicao($id);
// var_dump($values);die;
include __DIR__ . '/../header.php';
?>
<!DOCTYPE html>

<main>

<section>

    <a href="/filmes/index.php">
        <button>Retornar</button>
    </a>
    
</section>

<h2> Formulario Para Inscrever Filmes</h2>
<p> Filmes, Livros e Series que a Samanthinha quer Ler ou Assistir</p>

<form method="post" action="/filmes/src/Controller/Persistencia.php">

    <div class="form-group">
        <input type="hidden" id="id" name ="id" value="<?php echo $values[0]?>"class="form-control"></input>
    </div>
    <div class="form-group">
        <label> Nome do Filme ou Livro</label>
        <input type="text" id="name" value="<?php echo $values[1]?>" name="nome" class="form-control"></input>
    </div>
    <div class="form-group">
        <label> Genero</label>
        <input type="text" id="genero"class="form-control" name="genero" value="<?php echo $values[2]?>"></input>
    </div>
    <div class="form-group">
        <label> Data de Lançamento</label>
        <input type="date" id="dataLancamento" class="form-control" name="dataLancamento" value="<?php echo $values[3]?>"></input>
    </div>
    <div class="form-group">
        <label> Valor do DVD, Blu-ray ou Livro</label>
        <input type="double" id="valor" class="form-control" name="valor" value="<?php echo $values[4]?>"></input>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input class="form-control" type="file" id="foto" name="foto" value="<?php $values[5] ?>"/>
    </div>

    <div class="pt-4 form-group ">
        <button type="submit"> Salvar </button>
    </div>
    

</form>


</main>
<?php include __DIR__ . '/../footer.php';?>

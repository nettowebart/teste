<?php //  print_r($_SERVER['REQUEST_URI']);die;
include __DIR__ . '/../header.php';

// var_dump($_POST);

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
        <label> Nome do Filme ou Livro</label>
        <input type="text" id="name" name="nome" class="form-control"></input>
    </div>
    <div class="form-group">
        <label> Genero</label>
        <input type="text" id="genero"class="form-control" name="genero"></input>
    </div>
    <div class="form-group">
        <label> Data de Lançamento</label>
        <input type="date" id="dataLancamento" class="form-control" name="dataLancamento"></input>
    </div>
    <div class="form-group">
        <label> Valor do DVD, Blu-ray ou Livro</label>
        <input type="double" id="valor" class="form-control" name="valor"></input>
    </div>

    <div class="form-group">
        <label>Foto</label>
        <input class="form-control" type="file" id="foto" name="foto"/>
    </div>

    <div class="pt-4 form-group ">
        <button type="submit"> Salvar </button>
    </div>


</form>


</main>
<?php include __DIR__ . '/../footer.php';?>


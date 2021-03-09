<?php
namespace App;

use App\Model\FilmeRepository;
use App\Controller\ListarFilmes;

require_once __DIR__ . '/../../vendor/autoload.php';

include __DIR__ . '/../header.php';
// var_dump($_GET);die;

if ($_GET['area'] == test){
    if (!filter_input(INPUT_POST, "buscaNome", FILTER_SANITIZE_STRING)) {
        echo ("Nome Invalido");die;
    } 
    $lista = new ListarFilmes;
    $retorno = $lista->buscarPorNome($_POST['buscaNome']);
    if($retorno === false){

            echo "<script>alert('não existe esse filme na lista!');</script>";
    }
}
?>
<!DOCTYPE html>

<main>

<section>

    <a href="/filmes/index.php">
        <button>Retornar</button>
    </a>
    
</section>

<h2> Buscar Filmes por nome</h2>

<!-- <div class="alert alert-warning" role="alert" id="alerta">
  This is a warning alert—check it out!
</div> -->

<form action="<?php echo $PHP_SELF; ?>?area=test" method="post">

    <div class="form-group">
        <label> Nome do Filme ou Livro</label>
        <input type="text" id="buscaNome" name="buscaNome" class="form-control"></input>
    </div>

    <div class="pt-4 form-group ">
        <button type="submit" id="buscar"> Buscar </button>
    </div>

    <div id="invi">

        <div class="form-group">
            <label> Nome do Filme ou Livro</label>
            <input type="text" id="name" name="nome" class="form-control" value="<?php echo $retorno->nome ?>" readonly></input>
        </div>
        <div class="form-group">
            <label> Genero</label>
            <input type="text" id="genero"class="form-control" name="genero" value="<?php echo $retorno->genero ?>" readonly></input>
        </div>
        <div class="form-group">
            <label> Data de Lançamento</label>
            <input type="date" id="dataLancamento" class="form-control" name="dataLancamento" value="<?php echo $retorno->dataLancamento ?>" readonly></input>
        </div>
        <div class="form-group">
            <label> Valor do DVD, Blu-ray ou Livro</label>
            <input type="double" id="valor" class="form-control" name="valor" value="<?php echo $retorno->valor ?>" readonly></input>
        </div>

    </div>

</form>
<script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {

    if($('#genero').val() == ''){
        $('#invi').hide();
    }else{

        $('#invi').show();
    }
});



</script>


</main>
<?php include __DIR__ . '/../footer.php';?>


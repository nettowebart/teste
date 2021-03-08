<?php
namespace App\Controller;

use App\Model\Banco;

class DeletarController{

    private $lista;

    public function __construct($id)
    {

        $this->lista = new Banco;
        $this->processaRequisicao($id);
    }

    public function processaRequisicao($id) {
        

        $row = $this->lista->delete($id);
        
        if($row == true){
            echo "<script>alert('Registro deletado com sucesso!');document.location='/filmes/index.php'</script>";
        } else{
            echo "<script>alert('Falha ao deletar!');document.location='/filmes/index.php'</script>";
        }
    }

}

<?php

namespace App\Controller;


use App\Model\FilmeRepository;
// echo 'ta aqui';var_dump($_POST);die;
class InserirController{

    private $lista;
    // public $teste = $_POST;
    public function __construct() {

        $this->lista = new FilmeRepository;
        $this->filtra($_POST);
        $this->processaRequisicao($_POST);
    }

    public function processaRequisicao($array) {
       if($array['id']){
           $this->atualiza($array);
       }else{
            $nome = $array['nome'];
            $genero = $array['genero'];
            $dataLancamento = $array['dataLancamento'];
            $valor = $array['valor'];
            $foto = $array['foto'];

            // echo 'esta aqui';var_dump($foto);die;
            $row = $this->lista->insert($nome, $genero, $dataLancamento, $valor, $foto);
          
            // var_dump($row);die;
            if($row == true){
                echo "<script>alert('Registro adicinado com sucesso!');document.location='/filmes/index.php'</script>";
            }
       }
    }

    public function atualiza($array){
       
        $id = $array['id'];
        $nome = $array['nome'];
        $genero = $array['genero'];
        $dataLancamento = $array['dataLancamento'];
        $valor = $array['valor'];
        $imagem = $array['foto'];
        //  var_dump($nome);die;
        $row = $this->lista->update($id, $nome, $genero, $dataLancamento, $valor, $imagem);

        if($row == true){
            echo "<script>alert('Registro alterado com sucesso!');document.location='/filmes/index.php'</script>";
        } else{
            echo "<script>alert('Registro não alterado infelizmente!');document.location='/filmes/index.php'</script>";
        }

    }

    private function filtra($array){



    }
    
    
}


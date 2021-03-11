<?php

namespace App\Controller;

use App\Model\Repository\FilmeRepository as RepositoryFilmeRepository;
// echo 'asj';die;
class InserirController{

    private $lista;
    

    public function __construct($dados) {

        // var_dump($dados);die;
        $this->lista = new RepositoryFilmeRepository;

        $this->processaRequisicao($dados);
    }

    public function processaRequisicao($array) {
        // var_dump($array);die;
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
    
}


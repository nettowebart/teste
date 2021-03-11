<?php
namespace App\Controller;

use App\Controller\Pages\Page;
use App\Model\Repository\FilmeRepository as RepositoryFilmeRepository;
use App\Utils\View;

class EditarController extends Page{

    private $lista;

    public function __construct($id)
    {

        $this->lista = new RepositoryFilmeRepository;
        // $this->processaRequisicao($id);

        echo $this->processaRequisicao($id);
    }

    public function processaRequisicao($id) {

        $row = $this->lista->searchForId($id);
        $arr = array_values($row);
            // var_dump($arr);die;
        //camada de dados
        $itens = '';
        $itens .= View::render('pages/edit/editarValores',[
            'id' => $arr[0],
            'nome' => $arr[1],
            'dataLancamento' => $arr[3],
            'genero' => $arr[2],
            'imagem' => $arr[5],
            'valor' => $arr[4]]);
        //tentativa de trazer!
        $content = View::render('pages/editarFilme', [
            'edit' => $itens,
        ]);
        return parent::getPage($content);   
    }

}
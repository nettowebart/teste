<?php
namespace App\Controller\Pages;

use App\Model\Repository\FilmeRepository;
use App\Utils\View;

class formulario extends Page{

    public static function getForm(){

        // var_dump($_SERVER);die;

        //view de formulario
        $content = View::render('pages/formularioFilmes');
        $preenche = 'chegou';
        return parent::getPage($content, $preenche);

    }

    public static function getEditForm($id){
        //buscar valores
        $busca = new FilmeRepository;
        $row = $busca->searchForId($id);
        $arr = array_values($row);
        $edit = '';
        $_SERVER["REQUEST_URI"] = '/filmes/formulario.php';
        // var_dump($_SERVER["REQUEST_URI"]);die;
        $edit = View::render('pages/formularioFilmes/editarValores',[
 
            'nome' => $arr['nome']
            ]);

        //preencher campos
        // var_dump($arr);die;
        //view de formulario
        $content = View::render('pages/editarFilme');
        $preenche = 'chegou';
        return parent::getPage($content);
    }

}
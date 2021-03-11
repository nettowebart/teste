<?php

namespace App\Controller\Pages;

use App\Model\Repository\FilmeRepository;
use App\Utils\View;

class BuscaFilmes extends Page{

    /**
     * MEtodo responsavel pelo conteudo da home
     * @return string
     */
    public static function buscarPorNome(){
        
        //view da home
        $content = View::render('pages/buscaFilme');
        
        return parent::getPage($content);

    }
    
}


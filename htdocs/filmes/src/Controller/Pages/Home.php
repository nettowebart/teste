<?php

namespace App\Controller\Pages;

use App\Controller\InterfaceProcesso;
use App\Utils\View;
use App\Model\Repository\FilmeRepository;

class Home extends Page {

    /**
     * MEtodo responsavel pelo conteudo da home
     * @return string
     */
    public static function getHome(){

        $teste = new FilmeRepository;
        $raiva = $teste->getFilmes();
        $itens = '';
        
        $date = strtotime($raiva[0]['dataLancamento']); 
        // var_dump(date('d/m/Y ', $date));die;

        foreach($raiva as $value){
            $itens .= View::render('pages/home/item',[
                'id' => $value['id'],
                'nome' => $value['nome'],
                'dataLancamento' =>  date('d/m/Y ', strtotime($value['dataLancamento'])),
                'genero' => $value['genero'],
                'imagem' => $value['imagem'],
                'valor' => $value['valor']]);
        }
        //view da home
        $content = View::render('pages/home', [
            'itens' => $itens
        ]);
        
        return parent::getPage($content);

    }

}

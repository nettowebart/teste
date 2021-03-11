<?php

namespace App\Utils;

class View{
    /**metodo responsavel por retornar o conteudo de uma view
     * @param string $view
     * @param array $vars
     * return string
     */
    private static function getContentView($view){
        // var_dump($view);die;
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        // var_dump($file);die;
        return file_exists($file) ? file_get_contents($file) : 'error 404';

    }
    /**metodo responsavel por retornar o conteudo renderizado de uma view
     * @param string $view
     * @param array $vars(string/numeric)
     * return string
     */
    public static function render($view, $vars = []){
        //Conteudo de View
        $contentView = self::getContentView($view);
        // var_dump($vars);die;
        
        //Chaves de Array de Variaveis
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        }, $keys);

        // echo 'sad';var_dump($contentView);die;
        // return $contentView;
        return str_replace($keys, array_values($vars), $contentView);

    }

}


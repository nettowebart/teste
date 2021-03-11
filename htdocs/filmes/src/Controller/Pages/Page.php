<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page{

    private static function getHeader(){
        return View::render('pages/header');
    }
    private static function getFooter(){
        return View::render('pages/footer');
    }

    public static function getPage($content){
        // echo 'sa ';var_dump($content);die;
        return View::render('pages/page',[
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);

    }
}
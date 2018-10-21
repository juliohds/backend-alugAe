<?php

namespace App\Http\Controllers;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Http\Request;

class CrawlerUser extends Controller{

    public function showInfoCrawler(Request $request)
    {
    
    $html = HtmlDomParser::file_get_html($request->input('url')); 

        if($html != null){

            
                //$array = explode("-",$phase);

                //  $new = new Noticia;
                //  $new->titulo = utf8_encode(str_replace("&nbsp;","",$array[1]));
                //  $new->conteudo = utf8_encode(str_replace("&nbsp;","",$array[1]));
                //  $new->data = str_replace("&nbsp;","",$array[0]);
                //  $new->save();

            return $html->find("#pageTitle");
        }
    }

}




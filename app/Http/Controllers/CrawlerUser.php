<?php

namespace App\Http\Controllers;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Http\Request;

class CrawlerUser extends Controller
{
    $html = HtmlDomParser::file_get_html('http://www.fds.com.br/capa.asp?idpaginainst=principal'); 

    if($html != null){
        for ($i=0; $i < 3; $i++) { 
            
            $phase=$html->find("div.materias ul li a", $i)->innertext;
            $array = explode("-",$phase);

            $new = new Noticia;
            $new->titulo = utf8_encode(str_replace("&nbsp;","",$array[1]));
            $new->conteudo = utf8_encode(str_replace("&nbsp;","",$array[1]));
            $new->data = str_replace("&nbsp;","",$array[0]);
            $new->save();
        }

        return json_encode(array('message'=>true));
    }

}




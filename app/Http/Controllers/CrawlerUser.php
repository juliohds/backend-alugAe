<?php

namespace App\Http\Controllers;
use Sunra\PhpSimple\HtmlDomParser;
use Illuminate\Http\Request;

class CrawlerUser extends Controller{

    public function showInfoCrawler(Request $request)
    {
    
    $html = HtmlDomParser::file_get_html($request->input('url')); 

        if($html != null){

            
            static $seen = array();
            if (isset($seen[$url]) || $depth === 0) {
                return;
            }
        
            $seen[$url] = true;
        
            
            $anchors = $dom->getElementsByTagName('a');
            foreach ($anchors as $element) {
                $href = $element->getAttribute('href');
                if (0 !== strpos($href, 'http')) {
                    $path = '/' . ltrim($href, '/');
                    if (extension_loaded('http')) {
                        $href = http_build_url($url, array('path' => $path));
                    } else {
                        $parts = parse_url($url);
                        $href = $parts['scheme'] . '://';
                        if (isset($parts['user']) && isset($parts['pass'])) {
                            $href .= $parts['user'] . ':' . $parts['pass'] . '@';
                        }
                        $href .= $parts['host'];
                        if (isset($parts['port'])) {
                            $href .= ':' . $parts['port'];
                        }
                        $href .= dirname($parts['path'], 1).$path;
                    }
                }
                crawl_page($href, $depth - 1);
            }
            echo "URL:",$url,PHP_EOL,"CONTENT:",PHP_EOL,$dom->saveHTML(),PHP_EOL,PHP_EOL;

            return $html->find(".g47SY");
        }
    }

}




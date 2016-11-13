<?php

namespace design_pattern\Builder;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Builder\textBuilder;
use design_pattern\Builder\director;
use design_pattern\Builder\HTMLBuilder;

class access
{
    public static function main($text_type)
    {
        if ($text_type == 'plain'){
            $textbuilder = new textBuilder();
            $director = new director($textbuilder);
            $director->build();
            $result = $textbuilder->getResult();
            echo $result;

        }elseif($text_type == 'html'){
            $htmlbuilder = new HTMLBuilder();
            $director = new director($htmlbuilder);
            $director->build();
            $filename = $htmlbuilder->getResult();
            echo $filename."が作成されました。\n";
            echo $htmlbuilder->getHtml();

        }else{
            echo '指定されたファイル形式は存在しません';
        }
    }
}

access::main('plain');

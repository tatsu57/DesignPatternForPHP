<?php

namespace design_pattern\TemplateMethod;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\TemplateMethod\CharDisplay;
use design_pattern\TemplateMethod\StringDisplay;

class Access
{
    public static function mainForChar()
    {
        $charDisplay = new CharDisplay("N");
        $charDisplay->display();
    }

    public static function mainForString()
    {
        $stringDisplay = new StringDisplay("Hello, World");
        $stringDisplay->display();
    }
}

Access::mainForChar();

Access::mainForString();

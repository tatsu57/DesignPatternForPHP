<?php

namespace design_pattern\Decorator;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Decorator\stringDisplay;
use design_pattern\Decorator\sideBorder;
use design_pattern\Decorator\fullBorder;


class access
{
    public static function main()
    {
        $md = new multiStringDisplay();
        $md->add("good morning");
        $md->add("hello");
        $md->add("good night. see you tommorrow");


        $b2 = new sideBorder($md, '#');

        $b2->show();
        exit;


        exit;
        $b1 = new stringDisplay("Hello World");
        $b1->show();

        $b2 = new sideBorder($b1, '#');
        $b2->show();

        $b3 = new fullBorder($b2);
        $b3->show();

        $b4 = new fullBorder($b3);
        $b5 = new fullBorder($b4);
        $b6 = new fullBorder($b5);
        $b7 = new sideBorder($b6, '#');
        $b8 = new fullBorder($b7);
        $b9 = new fullBorder($b8);

        $b9->show();
    }
}

access::main();

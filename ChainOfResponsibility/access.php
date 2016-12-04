<?php

namespace design_pattern\ChainOfResponsibility;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\ChainOfResponsibility\trouble;
use design_pattern\ChainOfResponsibility\noSupport;
use design_pattern\ChainOfResponsibility\limitSupport;
use design_pattern\ChainOfResponsibility\specialSupport;
use design_pattern\ChainOfResponsibility\oddSupport;

class access
{
    public static function main()
    {
        $alice   = new noSupport("alice");
        $bob     = new limitSupport("bob", 100);
        $charlie = new specialSupport("charlie", 429);
        $diana   = new limitSupport("diana", 200);
        $elmo    = new oddSupport("elmo");
        $fred    = new limitSupport("fred", 300);

        $alice->setNext($bob)->setNext($charlie)->setNext($diana)->setNext($elmo)->setNext($fred);

        for ($i = 0; $i < 500; $i += 33){
            $alice->support(new trouble($i));
        }

    }
}
access::main();

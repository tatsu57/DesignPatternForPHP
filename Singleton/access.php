<?php

namespace design_pattern\Singleton;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Singleton\Singleton;

class access
{
    public static function main()
    {
        $obj1 = Singleton::getInstance();
        $obj2 = Singleton::getInstance();

        echo 'start'."\n";

        if ($obj1 == $obj2) {
            echo 'obj1とobj2は同じインスタンスです。'."\n";
        }else{
            echo 'obj1とobj2は同じインスタンスではありません。'."\n";
        }

        echo 'end';
    }
}

access::main();

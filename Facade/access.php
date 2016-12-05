<?php

namespace design_pattern\Facade;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Facade\pageMaker\pageMaker;

class access
{
    /**
     * アクセス
     *
     * @see pageMaker makeWelcomePage() HTMLを生成
     */
    public static function main()
    {
        pageMaker::makeWelcomePage("hyuki@hyuki.com", "welcome.html");
    }
}
access::main();

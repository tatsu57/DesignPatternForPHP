<?php

namespace design_pattern\Adapter\Adapter_implement;

require '../../vendor/autoload.php';

use design_pattern\Adapter\Adapter_implement\printbanner;

class access
{
    /**
     * メインメソッド
     *
     * @see design_pattern\Adapter\Adapter_implement\printbanner printbanner バナーの表示処理クラス
     * @see string printWeak() ( )で表示
     * @see string printStrong() * *で表示
     *
     */
    public static function main()
    {
        $echo = new printbanner('hello');
        $echo->printWeak();
        $echo->printStrong();
    }
}

access::main();

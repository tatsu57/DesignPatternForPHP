<?php

namespace design_pattern\Bridge;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Bridge\stringDisplayImpl;
use design_pattern\Bridge\display;

class access
{
    /**
     * Bridgeパターンのメインメソッド
     *
     * @see displayImpl stringDisplayImpl() 文字列を表示するの実装クラス
     * @see display display() 実装クラスを処理するクラス
     * @see countDisplay countDisplay displayクラスを拡張したクラス
     * @see void display() 内容を表示する
     * @see void multiDisplay() 内容をすべて表示
     */
    public static function main()
    {
        $d1_function = new stringDisplayImpl('Hello, Japan');
        $d1 = new display($d1_function);

        $d2_function = new stringDisplayImpl('Hello, World');
        $d2 = new countDisplay($d2_function);

        $d1->display();

        $d2->display();
        $d2->multiDisplay(5);
    }
}

access::main();

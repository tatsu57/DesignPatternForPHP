<?php

namespace design_pattern\Proxy;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Proxy\PrinterProxy;

/**
 * client役のクラス
 *
 */
class access
{
    /**
     * メインメソッド
     *
     * @see PrinterProxy new PrinterProxy() 代理人役(Proxy役)のインスタンス
     * @see string getPrinterName() プリントする名前を取得
     * @see void printName() プリント処理
     *
     */
    public static function main()
    {
        $p = new PrinterProxy('alice');
        echo '名前は現在'.$p->getPrinterName().'です。'."\n";

        $p->setPrinterName('bob');
        echo '名前は現在'.$p->getPrinterName().'です。'."\n";

        $p->printName('Hello, World')."\n";

    }
}
access::main();

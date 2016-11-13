<?php

namespace design_pattern\Prototype;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Prototype\Manager;
use design_pattern\Prototype\UnderlinePen;
use design_pattern\Prototype\MessageBox;

class access
{
    /**
     * メイン処理(クライアント)
     *
     * @see Manager $manager インスタンスの管理・処理をするクラス
     * @see UnderlinePen $upen 引き数の文字列を元に、製品を作る実装クラス
     * @see MessageBox $mbox 引き数の文字列を元に、製品を作る実装クラス
     * @see null register() インスタンスを$managerの$showcaseに格納(登録処理)
     * @see obj create() 生成処理
     * @see string useProduct() 製品の実際を表示
     */
    public static function main()
    {
        //準備
        $manager = new Manager();

        $upen = new UnderlinePen('~');
        $mbox = new MessageBox('*');
        $sbox = new MessageBox('/');

        $manager->register('strong_message', $upen);
        $manager->register('waring_box', $mbox);
        $manager->register('slash_box', $sbox);

        //生成
        $p1 = $manager->create("strong_message");
        $p1->useProduct('hello_world');

        $p2 = $manager->create("waring_box");
        $p2->useProduct('hello_world');

        $p3 = $manager->create("slash_box");
        $p3->useProduct('hello_world');

    }
}

access::main();

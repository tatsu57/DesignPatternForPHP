<?php

namespace design_pattern\FactoryMethod;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\FactoryMethod\Concrete\CardFactory;
use design_pattern\FactoryMethod\Concrete\shopCardFactory;

class access{

    /**
     * メインメソッド
     *
     * @see design_pattern\FactoryMethod\Concrete\CardFactory CardFactory() カード工場クラス
     * @see obj create() 製品を作る・登録
     * @see string apply() 使う処理
     *
     */
    public static function main()
    {

        $CardFactory = new CardFactory();
        $CardFactory01 = $CardFactory->create('A社カード');
        $CardFactory02 = $CardFactory->create('B社カード');
        $CardFactory03 = $CardFactory->create('C社カード');

        $CardFactory01->apply();
        $CardFactory02->apply();
        $CardFactory03->apply();
    }
}

access::main();

<?php

namespace design_pattern\Observer;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Observer\randomNumberGenerator;
use design_pattern\Observer\digitObserver;
use design_pattern\Observer\graphObserver;

class access
{
    /**
     * メインメソッド
     *
     * @see randomNumberGenerator new randomNumberGenerator() 被験者(subject役)のインスタンス
     * @see digitObserver new digitObserver() 観察者(observer役)のインスタンス(数字版)
     * @see graphObserver new graphObserver() 観察者(observer役)のインスタンス(グラフ版)
     * @see void addObserver() 観察者を追加
     * @see void execute() 実行
     */
    public static function main()
    {
        $generator = new randomNumberGenerator();

        $observer1 = new digitObserver();
        $observer2 = new graphObserver();

        $generator->addObserver($observer1);
        $generator->addObserver($observer2);

        $generator->execute();
    }
}
access::main();

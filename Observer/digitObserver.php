<?php

namespace design_pattern\Observer;

use design_pattern\Observer\interfaceObserver;

/**
 * 観察者役(Observer)に実装クラス
 *
 */
class digitObserver implements interfaceObserver
{
    /**
     * 更新メソッド
     *  引数はインスタンスが渡されているのは、Subject役を意識しないため、$numberでも動くがそれではsubject役に依存してしまう。
     *
     * @param abstractNumberGenerator $generator 被験者(subject役)のインスタンス
     *
     * @see int getNumber() 番号を取得
     */
    public function update(abstractNumberGenerator $generator)
    {
        echo "DigitObserver:".$generator->getNumber()."\n";
        sleep(1);
    }
}

<?php

namespace design_pattern\Observer;

use design_pattern\Observer\interfaceObserver;

/**
 * 観察者役(Observer)に実装クラス
 *
 */
class graphObserver implements interfaceObserver
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
        echo "GraphObserver: ";

        $max_count = $generator->getNumber();
        for ($i = 0; $i < $max_count; $i++) {
            echo "*";
        }

        echo "\n";
        sleep(1);
    }
}

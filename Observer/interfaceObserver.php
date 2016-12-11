<?php

namespace design_pattern\Observer;

/**
 * 観察者役(Observer)にインターフェイス
 *
 */
interface interfaceObserver
{
    /**
     * 更新メソッド
     *  引数はインスタンスが渡されているのは、Subject役を意識しないため、$numberでも動くがそれではsubject役に依存してしまう。
     *
     * @param abstractNumberGenerator $generator 被験者(subject役)のインスタンス
     *
     */
    public function update(abstractNumberGenerator $generator);
}

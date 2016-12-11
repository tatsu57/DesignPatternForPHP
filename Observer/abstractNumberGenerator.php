<?php

namespace design_pattern\Observer;

/**
 * 被験者役(Subject)の抽象クラス
 *
 */
abstract class abstractNumberGenerator
{
    /** @var array $observers 観測者を格納する配列*/
    private $observers = array();

    /**
     * 観測者を追加
     *
     * @param interfaceObserver $observer 観測者のインスタンス
     */
    public function addObserver(interfaceObserver $observer)
    {
        array_push($this->observers, $observer);
    }

    /**
     * 変化を観測者に通知するメソッド
     *
     * @see void update() 更新するメソッド
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * 番号を取得
     *
     */
    abstract public function getNumber();

    /**
     * 実行する
     *
     */
    abstract public function execute();
}

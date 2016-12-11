<?php

namespace design_pattern\Observer;

use design_pattern\Observer\abstractNumberGenerator;

/**
 * 被験者役(Subject)の実装クラス
 *
 */
class randomNumberGenerator extends abstractNumberGenerator
{
    /**@var int $number 番号 */
    private $number;

    /**
     * 番号を取得
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * 実行する
     *
     * @see void notifyObservers() 変化を観測者に通知するメソッド
     */
    public function execute()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->number = rand(0, 49);
            $this->notifyObservers();
        }
    }
}

<?php

namespace design_pattern\Memento;

class memento
{
    /** @var int $money お金*/
    public $money;

    /** @var array $fruits フルーツの名前を格納する配列 */
    public $fruits = array();

    /**
     * コンストラクタ
     *
     * @param string $money お金
     */
    public function __construct($money)
    {
        $this->money = $money;
    }

    /**
     * お金を取得
     *
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * フルーツを追加
     *
     * @param string $fruit フルーツ
     */
    public function addFruit($fruit)
    {
        array_push($this->fruits, $fruit);
    }

    /**
     * 配列に格納したフルーツたちを取得
     *
     * @return array
     */
    public function getFruits()
    {
        return $this->fruits;
    }
}

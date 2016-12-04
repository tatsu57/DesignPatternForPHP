<?php

namespace design_pattern\ChainOfResponsibility;

class trouble
{
    /**@var string $number トラブル番号*/
    private $number;

    /**
     * コンストラクタ
     *
     * @param string $number トラブル番号
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * トラブル番号を取得
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * トラブル番号のマジックメソッド
     *
     * @return string
     */
    public function __toString()
    {
        return "[Trouble $this->number]";
    }
}

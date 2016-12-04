<?php

namespace design_pattern\ChainOfResponsibility;

use design_pattern\ChainOfResponsibility\abstractSupport;

class specialSupport extends abstractSupport
{
    /**@var string $number 解決できる特定の番号*/
    private $number;

    /**
     * コンストラクタ
     *
     * @param string $name サポート役の名前
     * @param string $number 解決できる特定の番号
     */
    public function __construct($name, $number)
    {
        parent::__construct($name);
        $this->number = $number;
    }

    /**
     * 解決できたか判定
     *
     * @param string $name サポート役の名前
     *
     * @see int getNumber() トラブル番号を取得
     *
     * @return boolean
     */
    protected function resolve($trouble)
    {
        return $trouble->getNumber() == $this->number;
    }
}

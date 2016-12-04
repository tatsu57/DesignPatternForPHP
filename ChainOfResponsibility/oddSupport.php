<?php

namespace design_pattern\ChainOfResponsibility;

use design_pattern\ChainOfResponsibility\abstractSupport;

class oddSupport extends abstractSupport
{
    /**
     * コンストラクタ
     *
     * @param string $name サポート役の名前
     *
     */
    public function __construct($name)
    {
        parent::__construct($name);
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
        return $trouble->getNumber() % 2 == 1;
    }
}

<?php

namespace design_pattern\ChainOfResponsibility;

use design_pattern\ChainOfResponsibility\abstractSupport;

class limitSupport extends abstractSupport
{
    /** @var int $limit 解決できる制限番号*/
    private $limit;

    /**
     * コンストラクタ
     *
     * @param string $name サポート役の名前
     * @param int $limit 解決できる制限番号
     *
     */
    public function __construct($name, $limit)
    {
        parent::__construct($name);
        $this->limit = $limit;
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
        return $trouble->getNumber() < $this->limit;
    }
}

<?php

namespace design_pattern\FactoryMethod\Concrete;

use design_pattern\FactoryMethod\FlameWork\abstract_product;

class shopCard extends abstract_product
{
    /** @var string $owner オーナー*/
    private $owner;

    /**
     * コンストラクタ
     *
     * @param string $owner オーナー
     *
     */
    public function __construct($owner)
    {
        echo $owner.'認識しました。'."\n";
        $this->owner = $owner;
    }

    /**
     * 使う処理
     *
     */
    public function apply()
    {
        echo $this->owner.'読み込みました。'."\n";
    }

    /**
     * オーナーの名前を取得
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
}

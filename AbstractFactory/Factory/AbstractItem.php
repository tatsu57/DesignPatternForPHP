<?php

namespace design_pattern\AbstractFactory\Factory;

abstract class AbstractItem
{
    /**@var string $caption 見出し*/
    protected $caption;

    /**
     * コンストラクタ
     *
     * @see string $caption 見出し
     */
    public function __construct($caption)
    {
        $this->caption = $caption;
    }

    /**
     * HTMLを生成する
     *
     */
    abstract public function makeHTML();
}

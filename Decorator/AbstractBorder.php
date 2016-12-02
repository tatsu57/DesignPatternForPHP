<?php

namespace design_pattern\Decorator;

use design_pattern\Decorator\AbstractDisplay;

abstract class AbstractBorder extends AbstractDisplay
{
    /** @var AbstractDisplay $display 装飾するインスタンス*/
    protected $display;

    /**
     * コンストラクタ
     *
     * @param AbstractDisplay $display 装飾するインスタンス
     */
    protected function __construct(AbstractDisplay $display)
    {
        $this->display = $display;
    }
}

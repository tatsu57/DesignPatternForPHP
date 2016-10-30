<?php

namespace design_pattern\Adapter\Adapter_implement;

use design_pattern\Adapter\Adapter_implement\abstract_print;
use design_pattern\Adapter\banner;

class printbanner extends abstract_print
{
    /** @var design_pattern\Adapter\banner $banner バナーのインスタンス */
    private $banner;

    /**
     * コンストラクタ
     *
     * @param string $string 文字列
     *
     * @see design_pattern\Adapter\banner $banner バナーのインスタンス
     */
    public function __construct($string)
    {
        $this->banner = new banner($string);
    }

    /**
     * 弱く表示
     *
     * @see string showWithParen() ( )で表示
     */
    public function printWeak()
    {
        $this->banner->showWithParen();
    }

    /**
     * 強く表示
     *
     * @see string showWithAster() *  * で表示
     */
    public function printStrong()
    {
        $this->banner->showWithAster();
    }
}

<?php

namespace design_pattern\Adapter\Adapter_extend;

use design_pattern\Adapter\Banner;
use design_pattern\Adapter\Adapter_extend\interface_print;

/**
 * Adapter(する側)のクラス
 *
 *
 */
class printbanner extends Banner implements interface_print
{
    /**
     * コンストラクタ
     *
     * @param string $string 文字列
     *
     * @see __construct() 親クラスのコンストラクタ
     */
    public function __construct($string)
    {
        parent::__construct($string);
    }

    /**
     * 弱く表示
     *
     * @access public
     *
     * @see string showWithParen() ( )で表示
     */
    public function printWeak()
    {
        $this->showWithParen();
    }

    /**
     * 強く表示
     *
     * @access public
     *
     * @see string showWithAster() * *で表示
     */
    public function printStrong()
    {
        $this->showWithAster();
    }
}

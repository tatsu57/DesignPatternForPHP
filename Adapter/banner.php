<?php

namespace design_pattern\Adapter;

/**
 * Adaptee(される側)のクラス
 * 既にテスト済みで動作が確認されているもの
 *
 */
class banner
{
    /** @var string $string*/
    private $string;

    /**
     * コンストラクタ
     *
     * @param string $string 文字列
     */
    function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * ( )で表示
     *
     * @access public
     */
    public function showWithParen()
    {
        echo '('.$this->string.')'."\n";
    }

    /**
     *  * *で表示
     *
     * @access public
     */
    public function showWithAster()
    {
        echo '*'.$this->string.'*'."\n";
    }
}

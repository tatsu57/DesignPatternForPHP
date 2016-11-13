<?php

namespace design_pattern\Prototype;

use design_pattern\Prototype\InterfaceProduct;

class UnderlinePen implements InterfaceProduct
{
    /** @var string $ulchar デコレートするための文字列 */
    private $ulchar;

    /**
     * コンストラクタ
     *
     * @param string $ulchar デコレートするための文字列
     */
    public function __construct($ulchar)
    {
        $this->ulchar = $ulchar;
    }

    /**
     * 製品の処理(実装メソッド)
     *
     * @param string $s 製品の文字列
     *
     */
    public function useProduct($s)
    {
        echo "\"".$s."\"\n";

        $max_length = strlen($s);
        for ($i = 0; $i < $max_length; $i++) {
            echo $this->ulchar;
        }
        echo "\n";
    }

    /**
     * クローンメソッド(実装メソッド)
     *  このクラスのコピーインスタンスを返す
     *
     * @return MessageBox
     */
    public function __clone()
    {
        return $this;
    }
}

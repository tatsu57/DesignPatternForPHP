<?php

namespace design_pattern\Prototype;

use design_pattern\Prototype\InterfaceProduct;

class MessageBox implements InterfaceProduct
{
    /**@var string $decochar デコレートするための文字列 */
    private $decochar;

    /**
     * コンストラクタ
     *
     * @param string $decochar デコレートするための文字列
     */
    public function __construct($decochar)
    {
        $this->decochar =$decochar;
    }

    /**
     * 製品の処理(実装メソッド)
     *
     * @param string $s 製品の文字列
     *
     */
    public function useProduct($s)
    {
        $max_length = strlen($s) + 4;

        for ($i = 0; $i < $max_length; $i++) {
            echo $this->decochar;
        }
        echo "\n";

        echo $this->decochar.' '.$s.' '.$this->decochar."\n";;

        for ($i = 0; $i < $max_length; $i++) {
            echo $this->decochar;
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

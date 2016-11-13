<?php

namespace design_pattern\Prototype;

interface InterfaceProduct
{
    /**
     * 製品を使う
     *
     * @param string $s 製品の文字列
     */
    public function useProduct($s);

    /**
     * クローンメソッド
     *
     */
    public function __clone();
}

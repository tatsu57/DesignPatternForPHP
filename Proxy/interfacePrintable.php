<?php

namespace design_pattern\Proxy;

/**
 * Subject役のインターフェイス
 *
 */
interface interfacePrintable
{
    /**
     * プリントする名前をセット
     *
     * @param string $name プリントする名前
     */
    public function setPrinterName($name);

    /**
     * プリントする名前を取得
     */
    public function getPrinterName();

    /**
     * 名前をプリントする処理
     *
     * @param string $string プリントする内容
     */
    public function printName($string);
}

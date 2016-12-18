<?php

namespace design_pattern\Proxy;

use design_pattern\Proxy\interfacePrintable;
use design_pattern\Proxy\Printer;

/**
 * 代理人役(Proxy役)のクラス
 *
 */
class printerProxy implements interfacePrintable
{
    /** @var string $name プリントする名前 */
    private $name;

    /** @var interfacePrintable $real 本人(RealSubject役)のインスタンス*/
    private $real;

    /**
     * コンストラクタ
     *
     * @param string $name プリントする名前
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * プリントする名前をセット
     *
     * @param string $name プリントする名前
     *
     * @see void setPrinterName() 本人役(RealSubject役)にセット
     */
    public function setPrinterName($name)
    {
        if (! is_null($this->real)){
            $this->real->setPrinterName($name);
        }
        $this->name = $name;
    }

    /**
     * プリントする名前を取得
     *
     * @return string
     */
    public function getPrinterName()
    {
        return $this->name;
    }

    /**
     * 名前をプリントする処理
     *
     * @param string $string プリントする内容
     *
     * @see void realize() 代理人役では処理仕切れないので、本人を召喚
     * @see void printName() プリントする処理(本人役)
     */
    public function printName($string)
    {
        $this->realize();
        $this->real->printName($string);
    }

    /**
     * 代理人役では処理仕切れないので、本人を召喚
     *
     * @see Printer new Printer() 本人役(RealSubject役)のインスタンス
     */
    private function realize()
    {
        if (is_null($this->real)){
            $this->real = new Printer($this->name);
        }
    }
}

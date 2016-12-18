<?php

namespace design_pattern\Proxy;

use design_pattern\Proxy\interfacePrintable;

/**
 * 本人(RealSubject役)のクラス
 *
 */
class printer implements interfacePrintable
{
    /**@var string $name プリントする名前 */
    private $name;

    /**
     * コンストラクタ
     *
     * @param string $name プリントする名前
     *
     * @see void heavyJob() 重たい処理を擬似的に
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->heavyJob('Printerのインスタンス('.$name.')を生成');
    }

    /**
     * プリントする名前をセット
     *
     * @param string $name プリントする名前
     */
    public function setPrinterName($name)
    {
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
     */
    public function printName($string)
    {
        echo '==='.$this->name.'==='."\n";
        echo $string."\n";
    }

    /**
     * 重たい処理を擬似的に
     *
     */
    private function heavyJob($msg)
    {
        echo $msg;

        for ($i=0; $i < 5; $i++) {
            sleep(1);
            echo '.';
        }

        echo '完了'."\n";
    }
}

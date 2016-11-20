<?php

namespace design_pattern\Bridge;

use design_pattern\Bridge\displayImpl;

class stringDisplayImpl extends displayImpl
{
    /** @var string string 内容*/
    private $string;

    /** @var int $width 内容の文字数*/
    private $width;

    /**
     * コンストラクタ
     *
     * @param string $string 内容
     */
    public function __construct($string)
    {
        $this->string = $string;
        $this->width  = strlen($string);
    }

    /**
     * 開く処理(実装)
     *
     * @param see printLine() ラインを表示
     */
    public function rawOpen()
    {
        $this->printLine();
    }

    /**
     * 内容を表示(実装)
     *
     */
    public function rawPrint()
    {
        echo '['.$this->string.']'."\n";
    }

    /**
     * 閉じる処理(実装)
     *
     * @param see printLine() ラインを表示
     */
    public function rawClose()
    {
        $this->printLine();
    }

    /**
     * ラインを表示
     *
     */
    private function printLine()
    {
        echo '+';

        for ($i=0; $i < $this->width; $i++) {
            echo '-';
        }
        echo '+'."\n";
    }
}

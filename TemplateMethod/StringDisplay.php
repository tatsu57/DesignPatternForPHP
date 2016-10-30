<?php

namespace design_pattern\TemplateMethod;

class StringDisplay extends AbstractDisplay
{
    /** @var string $string 文字列 */
    private $string;

    /** @var int $width 文字列の文字数*/
    private $width;

    /**
     * コンストラクタ
     *
     * @param string $string
     */
    public function __construct($string)
    {
        $this->string = $string;
        $this->width  = strlen($string);
    }

    /**
     * 開く
     *
     * @see string printLine() ラインを文字数分表示
     *
     */
    protected function open()
    {
        $this->printLine();
    }

    /**
     * 内容を表示する
     *
     */
    protected function show()
    {
        echo "|".$this->string."|\n";
    }

    /**
     * 閉じる
     *
     * @see string printLine() ラインを文字数分表示
     *
     */
    protected function close()
    {
        $this->printLine();
    }

    /**
     * ラインを文字数分表示
     *
     */
    private function printLine()
    {
        echo "+";

        for ($i = 0; $i < $this->width; $i++) {
            echo "-";
        }

        echo "+\n";
    }
}

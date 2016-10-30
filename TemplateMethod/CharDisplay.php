<?php

namespace design_pattern\TemplateMethod;

use design_pattern\TemplateMethod\AbstractDisplay;


class CharDisplay extends AbstractDisplay
{
    /** @var string $char */
    private $char;

    /**
     * コンストラクタ
     *
     * @param string $char 表示する一文字
     */
    public function __construct($char)
    {
        $this->char = $char;
    }

    /**
     * 開く
     *
     *
     */
    protected function open()
    {
        echo "<<";
    }

    /**
     * 内容を表示
     *
     *
     */
    protected function show()
    {
        echo $this->char;
    }

    /**
     * 閉じる
     *
     *
     */
    protected function close()
    {
        echo ">>";
    }
}

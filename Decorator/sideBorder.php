<?php

namespace design_pattern\Decorator;

use design_pattern\Decorator\AbstractBorder;

class sideBorder extends AbstractBorder
{
    /** string $borderChar デコレートする文字*/
    private $borderChar;

    /**
     * コンストラクタ
     *
     * @param AbstractDisplay $display 装飾するインスタンス
     * @param string $ch デコレートする文字
     */
    public function __construct(AbstractDisplay $display, $ch)
    {
        parent::__construct($display);
        $this->borderChar = $ch;
    }

    /**
     * 本体となる文字列の文字数を取得(列)
     *
     * @see int getColumns() 装飾するインスタンスの文字数
     *
     * @return int
     */
    public function getColumns()
    {
        return 1 + $this->display->getColumns() + 1;
    }

    /**
     * 行数を取得
     *
     * @see int getRows() 装飾するインスタンスの行数
     *
     * @return int
     */
    public function getRows()
    {
        return $this->display->getRows();
    }

    /**
     * 中身を取得
     *
     * @param int $row 行数
     *
     * @see string getRowText() 装飾するインスタンスの中身
     *
     * @return string
     */
    public function getRowText($row)
    {
        return $this->borderChar.$this->display->getRowText($row).$this->borderChar;
    }
}

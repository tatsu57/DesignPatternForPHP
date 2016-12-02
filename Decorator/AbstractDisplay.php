<?php

namespace design_pattern\Decorator;

abstract class AbstractDisplay
{
    /**
     * 文字数を取得
     *
     */
    abstract public function getColumns();

    /**
     * 行数を取得
     *
     */
    abstract public function getRows();

    /**
     * 文字列を取得
     *
     * @param int $row 行数
     */
    abstract public function getRowText($row);

    /**
     * 文字列を表示
     *
     * @see int getRows() 行数を取得
     * @see string getRowText() 文字列を取得
     */
    final public function show()
    {
        for ($i = 0; $i < $this->getRows(); $i++) {
            echo $this->getRowText($i)."\n";
        }
    }
}

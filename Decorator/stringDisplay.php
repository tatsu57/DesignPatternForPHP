<?php

namespace design_pattern\Decorator;

class stringDisplay extends AbstractDisplay
{
    /**@var $string 本体となる文字列*/
    private $string;

    /**
     * コンストラクタ
     *
     * @param string $string 本体となる文字列
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * 本体となる文字列の文字数を取得(列)
     *
     * @return int
     */
    public function getColumns()
    {
        return strlen($this->string);
    }

    /**
     * 行数を取得
     *
     * @return int
     */
    public function getRows()
    {
        return 1;
    }

    /**
     * 中身を取得
     *
     * @param int $row 行数
     *
     * @return string
     */
    public function getRowText($row)
    {
        if ($row == 0){
            return $this->string;
        }else{
            return null;
        }
    }
}

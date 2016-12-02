<?php

namespace design_pattern\Decorator;

class fullBorder extends AbstractBorder
{
    /**
     * コンストラクタ
     *
     * @param AbstractDisplay $display 装飾するインスタンス
     */
    public function __construct(AbstractDisplay $display)
    {
        parent::__construct($display);
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
        return 1 + $this->display->getRows() + 1;
    }

    /**
     * 中身を取得
     *
     * @param int $row 行数
     *
     * @see string getRowText() 装飾するインスタンスの中身
     * @see int getRows() 列
     * @see int getColumns() 行
     * @see string makeLine() ラインを作成
     *
     * @return string
     */
    public function getRowText($row)
    {
        $first_line = 0;
        $last_line = $this->display->getRows() + 1;

        if ($row == $first_line) {
            return "+". $this->makeLine('-', $this->display->getColumns())."+";
        }elseif($row == $last_line){
            return "+". $this->makeLine('-', $this->display->getColumns())."+";
        }else{
            return "|".$this->display->getRowText($row - 1)."|";
        }
    }

    /**
     * ラインを作成
     *
     * @param string $ch ラインを作る文字
     * @param int $count 列数
     *
     * @return string
     */
    private function makeLine($ch, $count)
    {
        $buf = '';

        for ($i=0; $i < $count; $i++) {
            $buf .= $ch;
        }
        return $buf;
    }
}

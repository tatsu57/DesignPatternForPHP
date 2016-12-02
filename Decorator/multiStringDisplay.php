<?php

namespace design_pattern\Decorator;

use design_pattern\Decorator\AbstractDisplay;

class multiStringDisplay extends AbstractDisplay
{
    /** @var string $body メッセージを配列で格納 */
    private $body = array();

    /** @var int $columns 列の数 */
    private $columns = 0;

    /**
     * メッセージをbodyに追加
     *
     * @param string $msg メッセージ
     *
     * @see void updateColumn() 列の数をアップデート
     */
    public function add($msg)
    {
        array_push($this->body, $msg);
        $this->updateColumn($msg);
    }

    /**
     * 本体となる文字列の文字数を取得(列)
     *
     * @return int
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * 行数を取得
     *
     * @return int
     */
    public function getRows()
    {
        return count($this->body);
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
        $fills = $this->columns - strlen($this->body[$row]);
        if ($fills > 0){
            return $this->body[$row] = $this->body[$row].$this->makeSpace($fills);
        }else{
            return $this->body[$row];
        }
    }

    /**
     * 列をアップデート
     *
     * @param string $msg メッセージ
     *
     *
     */
    private function updateColumn($msg)
    {
        if(strlen($msg) > $this->columns){
            $this->columns = strlen($msg);
        }
    }

    /**
     * スペースを作成
     *
     * @param int $space_count スペースの数
     */
    private function makeSpace($space_count)
    {
        $space = "";
        for ($i=0; $i < $space_count; $i++) {
            $space .= " ";
        }
        return $space;
    }
}

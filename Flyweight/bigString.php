<?php

namespace design_pattern\Flyweight;

use design_pattern\Flyweight\bigchar;
use design_pattern\Flyweight\bigCharFactory;

/**
 * クライアント役
 *
 *
 */
class bigString
{
    /** @var array $bigchars Flyweight役のインスタンス郡*/
    private $bigchars = array();

    /**
     * コンストラクタ
     *
     * @param array $strings リクエストされた文字
     * @param boolean $shared インスタンスを共有するか判定
     *
     * @see void initShared() インスタンス共有時の処理
     * @see void initUnshared() インスタンス共有しない時の処理
     */
    public function __construct($strings, $shared)
    {
        if ($shared){
            $this->initShared($strings);
        }else{
            $this->initUnshared($strings);
        }
    }

    /**
     * インスタンス共有時の処理
     *
     * @param array $strings リクエストされた文字
     *
     * @see bigCharFactory bigCharFactory::getInstance() flyweightFactory役のインスタンスを取得
     * @see bigchar getBigChar() Flyweight役のインスタンスを取得
     */
    private function initShared($strings)
    {
        $factory = bigCharFactory::getInstance();

        $max_count = count($strings);
        for ($i = 0; $i < $max_count; $i++) {
            $this->bigchars[$i] = $factory->getBigChar($strings[$i]);
        }
    }

    /**
     * インスタンス共有時の処理
     *
     * @param array $strings リクエストされた文字
     *
     * @see bigchar new bigchar() Flyweight役のインスタンスを取得
     */
    private function initUnshared($strings)
    {
        $max_count = count($strings);
        for ($i = 0; $i < $max_count; $i++) {
            $this->bigchars[$i] = new bigchar($strings[$i]);
        }
    }

    /**
     * すべての文字を表示
     *
     * @see void printFontdata() フォントデータを表示
     */
    public function printAll()
    {
        $max_count = count($this->bigchars);
        for ($i = 0; $i < $max_count; $i++) {
            $this->bigchars[$i]->printFontdata();
        }
    }
}

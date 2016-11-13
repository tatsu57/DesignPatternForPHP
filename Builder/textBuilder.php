<?php

namespace design_pattern\Builder;

use design_pattern\Builder\AbstractBuilder;

class textBuilder extends AbstractBuilder
{
    /** @var string $buffer テキストを格納*/
    private $buffer = '';

    /**
     * タイトル作成の実装メソッド
     *
     * @param string $titile タイトルの文字列
     */
    public function buildTitle($title)
    {
        $this->buffer .= "====================\n";
        $this->buffer .= "[".$title."]\n";
        $this->buffer .= "\n";
    }

    /**
     * 文字作成の実装メソッド
     *
     * @param string $str 文字の文字列
     */
    public function buildString($str)
    {
        $this->buffer .= "■".$str."\n";
        $this->buffer .= "\n";
    }

    /**
     * リスト作成の実装メソッド
     *
     * @param array $items リストの配列
     */
    public function buildItems($items)
    {
        $items_count = count($items);
        for ($i = 0; $i < $items_count; $i++) {
            $this->buffer .= " *".$items[$i]."\n";
        }
        $this->buffer .= "\n";
    }

    /**
     * 閉じタグ作成の実装メソッド
     *
     */
    public function buildDone()
    {
        $this->buffer .= "====================\n";
    }

    /**
     * 結果を取得
     *
     * @return string
     */
    public function getResult()
    {
        return $this->buffer;
    }
}

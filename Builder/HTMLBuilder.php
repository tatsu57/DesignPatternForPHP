<?php

namespace design_pattern\Builder;

use design_pattern\Builder\AbstractBuilder;

class HTMLBuilder extends AbstractBuilder
{
    /** string $filename ファイルの名前*/
    private $filename;

    /** string $writer HTMLの文字を格納する変数*/
    private $writer;

    /**
     * タイトル作成の実装メソッド
     *
     * @param string $titile タイトルの文字列
     */
    public function buildTitle($title)
    {
        $this->filename = $title.'.html';

        $this->writer .= "<!DOCTYPE html><html><head><meta charset=\"utf-8\"><title>$title</title></head><body>";
        $this->writer .= "<h1>$title</h1>";
    }

    /**
     * 文字作成の実装メソッド
     *
     * @param string $str 文字の文字列
     */
    public function buildString($str)
    {
        $this->writer .= "<p>$str</p>";
    }

    /**
     * リスト作成の実装メソッド
     *
     * @param array $items リストの配列
     */
    public function buildItems($items)
    {
        $this->writer .= "<ul>";

        $items_count = count($items);
        for ($i = 0; $i < $items_count; $i++) {
            $this->writer .= "<li>$items[$i]</li>";
        }

        $this->writer .= "</ul>";
    }

    /**
     * 閉じタグ作成の実装メソッド
     *
     */
    public function buildDone()
    {
        $this->writer .= "</body></html>";
    }

    /**
     *  結果を取得
     *
     * @return string
     */
    public function getResult()
    {
        return $this->filename;
    }

    /**
     * HTMLを取得
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->writer;
    }
}

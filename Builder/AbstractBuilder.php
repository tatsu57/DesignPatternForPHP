<?php

namespace design_pattern\Builder;

abstract class AbstractBuilder
{
    /**@var boolean $initialized 初期化のために真偽値 最初にmakeTitle()を呼び出すために必要*/
    private $initialized = false;

    /**
     * タイトルを作成
     *  タイトルは一番最初に呼び出されなければならないため,呼ぶだし後に$initializedをtrueにする
     *
     * @param string $titile タイトルの文字列
     *
     * @see void buildTitle() タイトル作成の実装メソッド
     *
     */
    public function makeTitle($title)
    {
        if (!$this->initialized){
            $this->buildTitle($title);
            $this->initialized = true;
        }
    }

    /**
     * 文字を作成
     *
     * @param string $str 文字の文字列
     *
     * @see void buildString() 文字作成の実装メソッド
     */
    public function makeString($str)
    {
        if ($this->initialized){
            $this->buildString($str);
        }else{
            throw new \Exception('must maketile, firstly');
        }

    }

    /**
     * リストを作成
     *
     * @param array $items リストの配列
     *
     * @see void buildItems() リスト作成の実装メソッド
     */
    public function makeItems($items)
    {
        if ($this->initialized){
            $this->buildItems($items);
        }else{
            throw new \Exception('must maketile, firstly');
        }
    }

    /**
     * 閉じタグを作成
     *
     * @see void buildDone() 閉じタグ作成の実装メソッド
     */
    public function close()
    {
        if ($this->initialized){
            $this->buildDone();
        }else{
            throw new \Exception('must maketile, firstly');
        }
    }

    /**
     * タイトル作成の実装メソッド
     *
     * @param string $titile タイトルの文字列
     */
    abstract protected function buildTitle($title);

    /**
     * 文字作成の実装メソッド
     *
     * @param string $str 文字の文字列
     */
    abstract protected function buildString($str);

    /**
     * リスト作成の実装メソッド
     *
     * @param array $items リストの配列
     */
    abstract protected function buildItems($items);

    /**
     * 閉じタグ作成の実装メソッド
     *
     */
    abstract protected function buildDone();
}

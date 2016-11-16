<?php

namespace design_pattern\AbstractFactory\Factory;

abstract class AbstractPage
{
    /**@var string $title タイトル*/
    protected $title;

    /** @var string $author 作者*/
    protected $author;

    /**@var array $content トレイを配列に格納*/
    protected $content = array();

    /**
     * コンストラクタ
     *
     * @param string $titile タイトル
     * @param string $author 作者
     */
    public function __construct($title, $author)
    {
        $this->title  = $title;
        $this->author = $author;
    }

    /**
     * トレイを配列に格納
     *
     * @param AbstractItem $item トレイ（配列）
     *
     */
    public function add(AbstractItem $item)
    {
        array_push($this->content, $item);
    }

    /**
     * HTML生成
     *
     * @see string makeHTML() HTMLを生成
     */
    public function output()
    {
        echo $this->title.'.htmlを作成しました。';
        echo $this->makeHTML();
    }

    /**
     * HTMLを生成の抽象メソッド
     *
     *
     */
    abstract public function makeHTML();
}

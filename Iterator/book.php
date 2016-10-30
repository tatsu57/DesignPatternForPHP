<?php

namespace design_pattern\Iterator;

class book
{
    /** @var string $name 本の名前 */
    private $name;

    /** @var string $category カテゴリー */
    private $category;

    /** @var string $color カラー */
    private $color;

    /**
     * コンストラクタ
     *
     * @param string $name 本の名前
     * @param string $category カテゴリー
     * @param string $color カラー
     */
    public function __construct($name, $category, $color)
    {
        $this->name     = $name;
        $this->category = $category;
        $this->color    = $color;
    }

     /**
      * 本の名前を取得
      *
      * @access public
      *
      * @return string
      */
    public function getName()
    {
        return $this->name;
    }

    /**
     * カテゴリーを取得
     *
     * @access public
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * カラーを取得
     *
     * @access public
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}

<?php

namespace design_pattern\Visitor\data;

use design_pattern\Visitor\data\abstractEntry;

class file extends abstractEntry
{
    /** @var string $name ファイル名 */
    private $name;

    /** @var int $size ファイルサイズ */
    private $size;

    /**
     * コンストラクタ
     *
     * @see string $name ファイル名
     * @see int $size ファイルサイズ
     */
    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * ファイル名を取得する
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * ファイルサイズを取得する
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * visitor役を受け入れる
     *
     * @param abstractVisitor $v visitor役のインスタンス
     *
     * @see void visit() 訪問する処理
     */
    public function accept($v)
    {
        $v->visit($this);
    }
}

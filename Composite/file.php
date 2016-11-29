<?php

namespace design_pattern\Composite;

use design_pattern\Composite\AbstractEntry;

class file extends AbstractEntry
{
    /** @var string $name ファイル名*/
    private $name;

    /** @var int $size ファイルサイズ*/
    private $size;

    /**
     * コンストラクタ
     *
     * @param string $name ファイル名
     * @param int $size ファイルサイズ
     */
    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    /**
     * ファイル名を取得
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * ファイルサイズを取得
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * ファイルの文字列を取得
     *
     * @param string $prefix 親のディレクトリ構造
     *
     * @see string toString() ファイル・ディレクトリー名とサイズを表示
     */
    protected function printList($prefix)
    {
        echo $prefix."/".$this->toString()."\n";
    }
}

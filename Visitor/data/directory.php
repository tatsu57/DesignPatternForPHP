<?php

namespace design_pattern\Visitor\data;

use design_pattern\Visitor\data\abstractEntry;

class directory extends abstractEntry
{
    /** @var string $name ディレクトリー名 */
    private $name;

    /** @var array $dir ディレクトリーの中身 */
    private $dir = array();

    /**
     * コンストラクタ
     *
     * @param string $name ディレクトリー名
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 名前を取得する
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * サイズを取得する
     *
     * @see int getSize() ディレクトリーの中身のサイズ
     *
     * @return int
     */
    public function getSize()
    {
        $size = 0;
        foreach ($this->dir as $file) {
            $size += $file->getSize();
        }

        return $size;
    }

    /**
     * ファイルやディレクトリーを追加
     *
     * @param abstractEntry $entry
     *
     * @return directory
     */
    public function add($entry)
    {
        array_push($this->dir, $entry);
        return $this;
    }

    /**
     * ディレクトリー内のファイルとディレクトリー
     *
     * @return array
     */
    public function iterator()
    {
        return $this->dir;
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

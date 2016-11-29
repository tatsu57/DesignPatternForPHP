<?php

namespace design_pattern\Composite;

use design_pattern\Composite\AbstractEntry;

class directory extends AbstractEntry
{
    /**@var $name ディレクトリー名 */
    private $name;

    /**@var array $directory ファイルやディレクトリーを格納するための配列 */
    private $directory = array();

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
     * ディレクトリ名を取得
     *
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * ディレクトリー内ファイルを含むファイルサイズを取得
     *
     * @see int getSize() ファイルのファイルサイズ
     *
     * @return int
     */
    public function getSize()
    {
        $size = 0;
        foreach ($this->directory as $value) {
            $size += $value->getSize();
        }
        return $size;
    }

    /**
     * ディレクトリーにファイルやディレクトリーを追加
     *
     * @see AbstractEntry $entry ファイルやディレクトリー
     */
    public function add(AbstractEntry $entry)
    {
        array_push($this->directory, $entry);
    }

    /**
     * ディレクトリー内の構造を表示
     *
     * @param string $prefix 親のディレクトリ構造
     *
     * @see string toString() ファイル・ディレクトリー名とサイズを表示
     * @see string printList() ディレクトリー内のファイルやディレクトリーを表示
     */
    protected function printList($prefix)
    {
        echo $prefix."/".$this->toString()."\n";

        foreach ($this->directory as $value) {
            $value->printList($prefix."/".$this->name);
        }
    }
}

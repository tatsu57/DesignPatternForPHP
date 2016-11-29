<?php

namespace design_pattern\Composite;

/**
 * 複数も単数も同一視するための抽象クラス
 *
 */
abstract class AbstractEntry
{
    /**
     * ファイル・ディレクトリー名を取得
     *
     */
    abstract public function getName();

    /**
     * サイズを取得
     *
     */
    abstract public function getSize();

    /**
     * ファイルやディレクトリを追加する
     *  ファイルにディレクトリを追加させないために、例外処理で止める
     *
     * @see RuntimeException RuntimeException 例外処理
     */
    public function add()
    {
        throw new \RuntimeException("cannot_add_directory_or_file_in_file");
    }

    /**
     * 全てのディレクトリとファイルを表示するメソッド
     *
     * @see string printList() 個別表示するメソッド
     */
    public function printAllList()
    {
        $this->printList(" ");
    }

    /**
     * 個別表示するメソッド
     *
     * @param string $prefix 親のディレクトリ構造
     */
    abstract protected function printList($prefix);

    /**
     * ファイル・ディレクトリー名とサイズを表示
     *
     * @see string getName() ファイル・ディレクトリー名を取得
     * @see int getSize() ファイルサイズを取得
     */
    public function toString()
    {
        return $this->getName()." (".$this->getSize().")";
    }
}

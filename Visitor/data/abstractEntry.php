<?php

namespace design_pattern\Visitor\data;

use design_pattern\Visitor\data\interfaceElement;

abstract class abstractEntry implements interfaceElement
{
    /**
     * 名前を取得する
     *
     */
    abstract public function getName();

    /**
     * サイズを取得する
     *
     */
    abstract public function getSize();

    /**
     * ファイルやディレクトリーを追加
     *  ファイルにディレクトリーを追加しないように例外処理を初期処理としておく
     *
     * @param abstractEntry $entry
     */
    public function add(abstractEntry $entry)
    {
        throw new \RuntimeException("cannot_add_directory_or_file_in_entry");
    }

    /**
     * ディレクトリー内のディレクトリーやファイルを取得するメソッド
     *  ファイルは配列ではないので例外処理を初期処理としておく
     *
     * @param abstractEntry $entry
     */
    public function iterator()
    {
        throw new \RuntimeException("cannot_iterator_in_entry");
    }

    /**
     * ファイル名とサイズを取得
     *
     * @param string getName() 名前を取得
     * @param int getSize() サイズを取得
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName().'('.$this->getSize().')';
    }
}

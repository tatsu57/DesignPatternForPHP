<?php

namespace design_pattern\Visitor\visitor;

use design_pattern\Visitor\visitor\abstractVisitor;

class listVisitor extends abstractVisitor
{
    /** @var string $currentdir 現在のディレクトリー */
    private $currentdir = "";


    /**
     * ファイルクラスの訪問メソッド
     *
     * @param abstractEntry $file ファイルクラスのインスタンス
     */
    protected function visitForFile($file)
    {
        echo $this->currentdir."/".$file."\n";
    }

    /**
     * ディレクトリークラスの訪問メソッド
     *
     * @param abstractEntry $directory ディレクトリークラスのインスタンス
     *
     * @see string getName() ディレクトリーのファイル名
     * @see array iterator() ディレクトリー内のファイル構成
     * @see void accept() visitor役を受け入れるメソッド
     */
    protected function VisitForDirectory($directory)
    {
        echo $this->currentdir."/".$directory."\n";

        $savedir = $this->currentdir;

        $this->currentdir = $this->currentdir."/".$directory->getName();
        foreach ($directory->iterator() as $value) {
            $value->accept($this);
        }

        $this->currentdir = $savedir;
    }
}

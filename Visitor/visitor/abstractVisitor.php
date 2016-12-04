<?php

namespace design_pattern\Visitor\visitor;

abstract class abstractVisitor
{
    /** @var FILE_CLASS_NAME fileのクラス名*/
    const FILE_CLASS_NAME = 'design_pattern\Visitor\data\file';

    /**
     * ファイルクラスの訪問メソッド
     *
     * @param abstractEntry $file ファイルクラスのインスタンス
     */
    abstract protected function visitForFile($file);

    /**
     * ディレクトリークラスの訪問メソッド
     *
     * @param abstractEntry $directory ディレクトリークラスのインスタンス
     */
    abstract protected function VisitForDirectory($directory);

    /**
     * 訪問するメソッド
     *
     * @param abstractEntry $value ファイルorディレクトリーのインスタンス
     *
     * @see void visitForFile() ファイルクラスの訪問メソッド
     * @see void VisitForDirectory() ディレクトリークラスの訪問メソッド
     */
    public function visit($value)
    {
        if (get_class($value) == self::FILE_CLASS_NAME){
            $this->visitForFile($value);
        }else{
            $this->VisitForDirectory($value);
        }
    }

}

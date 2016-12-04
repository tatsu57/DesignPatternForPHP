<?php

namespace design_pattern\Visitor\visitor;

use design_pattern\Visitor\visitor\abstractVisitor;

class fileFindVisitor extends abstractVisitor
{
    /**@var array $html_files htmlファイルを配列で保持 */
    private $html_files = array();

    /** @var string $extension 拡張子*/
    private $extension;

    /**
     * コンストラクタ
     *
     * @param string $extension 拡張子
     */
    public function __construct($extension)
    {
        $this->extension = $extension;
    }

    /**
     * ファイルクラスの訪問メソッド
     *
     * @param abstractEntry $file ファイルクラスのインスタンス
     *
     * @see string getName() ファイル名を取得
     */
    protected function visitForFile($file)
    {
        if (preg_match('/'.$this->extension.'/',$file->getName())){
            array_push($this->html_files, $file);
        }
    }

    /**
     * ディレクトリークラスの訪問メソッド
     *
     * @param abstractEntry $directory ディレクトリークラスのインスタンス
     *
     * @see array iterator() ディレクトリー内のファイル構成
     * @see void accept() visitor役を受け入れるメソッド
     */
    protected function VisitForDirectory($directory)
    {
        foreach ($directory->iterator() as $value) {
            $value->accept($this);
        }
    }

    /**
     * 見つけたファイルを取得
     *
     * @return array
     */
    public function getFoundFiles()
    {
        return $this->html_files;
    }
}

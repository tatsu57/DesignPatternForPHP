<?php

namespace design_pattern\Flyweight;

class bigchar
{
    /** @var string FILE_PATH ファイルのパス*/
    const FILE_PATH = '/textfile/';

    /** @var string FILE_PREFIX ファイルのプレフィックス*/
    const FILE_PREFIX = 'big';

    /** @var string FILE_EXTENSION ファイルの拡張子*/
    const FILE_EXTENSION = ".txt";

    /** @var string $charname フォントの名前*/
    private $charname;

    /** @var string $fontdata フォントデータ*/
    private $fontdata;

    /**
     * コンストラクタ
     *
     * @param string $charname フォントの名前
     *
     * @see string read_text_file() テキストファイルを読み込み
     */
    public function __construct($charname)
    {
        $this->charname = $charname;

        $filename = self::FILE_PREFIX.$charname.self::FILE_EXTENSION;
        $file_path = __DIR__.self::FILE_PATH.$filename;

        if (file_exists($file_path)){
            $this->fontdata = $this->read_text_file($filename);
        }else{
            $this->fontdata = $charname.'?';
        }

    }

    /**
     * テキストファイルを読み込み
     *
     * @param strign $filename ファイル名
     *
     * @return string
     */
    private function read_text_file($filename)
    {
        $file_path = __DIR__.self::FILE_PATH.$filename;

        $file = fopen($file_path, "r");

        $fontdata = '';
        while ($line = fgets($file)) {
            $fontdata .= $line;
        }

        fclose($file);

        return $fontdata;
    }

    /**
     * フォントデータを表示
     *
     */
    public function printFontdata()
    {
        echo $this->fontdata;
    }
}

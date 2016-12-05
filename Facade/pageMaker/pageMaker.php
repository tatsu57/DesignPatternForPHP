<?php

namespace design_pattern\Facade\pageMaker;

use design_pattern\Facade\pageMaker\database;
use design_pattern\Facade\pageMaker\htmlWriter;

class pageMaker
{
    private function __construct()
    {

    }

    /**
     * HTMLを生成する(facade役の唯一の窓口)
     *
     * @param string $mailaddr メールアドレス
     * @param string $filename ファイル名
     *
     * @see database database() データベースのインスタンス
     * @see string getUsername() ユーザ名を取得
     * @see htmlWriter htmlWriter() html生成のインスタンス
     * @see void title() タイトルをセット
     * @see void paragraph() パラグラフをセット
     * @see void mailto() メールをセット
     * @see void close() HTML閉じタグをセット
     */
    public static function makeWelcomePage($mailaddr, $filename)
    {
        $mailprop = new database('maildata');
        $username = $mailprop->getUsername($mailaddr);

        $writer = new htmlWriter();
        $writer->title("Welcome to $username's page!");
        $writer->paragraph("$username のページにようこそ");
        $writer->paragraph("メールまっていますね");
        $writer->mailto($mailaddr, $username);
        $writer->close();

        $file = dirname(__DIR__).'/result.html';
        file_put_contents($file, $writer->getHtml());

        echo "$filename is created for $mailaddr ($username)";
    }
}

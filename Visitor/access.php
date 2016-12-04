<?php

namespace design_pattern\Visitor;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Visitor\data\directory;
use design_pattern\Visitor\data\file;
use design_pattern\Visitor\visitor\listVisitor;
use design_pattern\Visitor\visitor\fileFindVisitor;

class access
{
    /**
     * メイン処理
     *
     * @see directory directory() ディレクトリーのインスタンス
     * @see file file() ファイルのインスタンス
     * @see abstractEntry add() ディレクトリーやファイルを追加
     * @see listVisitor listVisitor() visitor役(リスト形式版)
     * @see void accept() visitorを受け入れるメソッド
     * @see fileFindVisitor fileFindVisitor() visitor役(特定のファイルを探す)
     * @see array getFoundFiles() 見つかった特定のファイルを取得
     */
    public static function main()
    {
        echo "Making root entries.....\n";

        $rootdir = new directory('root');
        $bindir = new directory('bin');
        $tmpdir = new directory('tmp');
        $usrdir = new directory('usr');

        $rootdir->add($bindir);
        $rootdir->add($tmpdir);
        $rootdir->add($usrdir);

        $bindir->add(new file('vi.html', 10000));
        $bindir->add(new file('latex.html', 20000));
        $tmpdir->add(new file('latex.jpeg', 40000));

        //通常版
        $rootdir->accept(new listVisitor());


        //特定のファイルを探す
        echo "found html files....\n";
        $ffv = new fileFindVisitor('.html');
        $rootdir->accept($ffv);
        foreach ($ffv->getFoundFiles() as $file) {
            echo $file."\n";
        }

    }
}

access::main();

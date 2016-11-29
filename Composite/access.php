<?php

namespace design_pattern\Composite;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Composite\directory;


class access
{
    /**
     * 再帰的に複数も単数も同一視するクライアント
     *
     * @see directory directory() ディレクトリーのインスタンス
     * @see file file() ファイルのインスタンス
     * @see void add() ファイルやディレクトリーを親ディレクトリーに追加
     * @see void printAllList() すべての構造を表示
     */
    public static function main()
    {
        echo 'Making root entries...'."\n";

        $rootDir = new directory("root");

        $binDir = new directory("bin");
        $tmpDir = new directory("tmp");
        $usrDir = new directory("usr");

        $rootDir->add($binDir);
        $rootDir->add($tmpDir);
        $rootDir->add($usrDir);

        $binDir->add(new file('vi', 1000));
        $binDir->add(new file('latex', 2000));

        $binDir->add(new directory("nanako"));

        $yuki   = new directory("yuki");
        $hanako = new directory("hanako");
        $tomura = new directory("tomura");

        $usrDir->add($yuki);
        $usrDir->add($hanako);
        $usrDir->add($tomura);

        $yuki->add(new file('aaa', 100));
        $yuki->add(new file('bbb', 400));

        $hanako->add(new file('ccc', 1000));
        $hanako->add(new file('ddd', 1500));
        $hanako->add(new file('eee', 4000));

        $tomura->add(new file('fff', 20));
        $tomura->add(new file('ggg', 15));
        $tomura->add(new file('hhh', 20));



        $rootDir->printAllList();
    }
}

access::main();

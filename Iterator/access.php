<?php

namespace design_pattern\Iterator;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\iterator\bookshelf;
use design_pattern\Iterator\Book;
use design_pattern\Iterator\filter\categoryit;

class access
{
    /**
     * アクセスのメインメソッド
     *
     * @access public
     *
     * @see design_pattern\iterator\bookshelf $bookShelf 本の集約オブジェクト
     * @see null add() 本の詳細データを追加
     * @see ArrayIterator getIterator() すべての集約データを取得
     * @see design_pattern\Iterator\filter\categoryit categoryIt() カテゴリーがITのみするフィルタークラス
     */
    public function main()
    {
        $bookShelf = new bookshelf();
        $bookShelf->add(new book('book_01', 'IT', 'white'));
        $bookShelf->add(new book('book_02', 'FASION', 'red'));
        $bookShelf->add(new book('book_03', 'COMPUTER', 'white'));
        $bookShelf->add(new book('book_04', 'IT', 'blue'));
        $bookShelf->add(new book('book_05', 'COMPUTER', 'white'));
        $bookShelf->add(new book('book_06', 'IT', 'blue'));

        $iterator = $bookShelf->getIterator();

        //カテゴリーがITだけのものにする
        $iterator = new categoryIt($iterator);

        foreach ($iterator as $book) {
            echo $book->getName().' | '.$book->getCategory().' | '.$book->getColor()."\n";
        }
    }
}

$ddd = new access();
$ddd->main();

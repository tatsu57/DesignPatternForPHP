<?php

namespace design_pattern\Iterator;

use design_pattern\iterator\book;

class bookshelf implements \IteratorAggregate
{
    /**  @var ArrayObject $books 本のarrayObject */
    private $books;

    /**
     * コンストラクタ
     *
     * @see ArrayObject ArrayObject()
     */
    public function __construct()
    {
        $this->books = new \ArrayObject();
    }

    /**
     * 追加メソッド
     *
     * @access public
     *
     * @param design_pattern\iterator\book $book 本のクラス
     *
     */
    public function add(book $book)
    {
        $this->books[] = $book;
    }

    /**
     * すべてのブックを取得するメソッド
     *
     * @access public
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return $this->books->getIterator();
    }

}

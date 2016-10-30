<?php

namespace design_pattern\Iterator\filter;

use design_pattern\Iterator\Book;

class CategoryIt extends \FilterIterator
{
    /**
     * コンストラクタ
     *
     * @param ArrayIterator $iterator
     *
     * @see null __construct()
     */
    public function __construct($iterator)
    {
        parent::__construct($iterator);
    }

    /**
     * フィルターの内容
     *
     * @return boolean
     */
    public function accept()
    {
        $book = $this->getInnerIterator()->current();

        return ($book->getCategory() === 'IT');
    }
}

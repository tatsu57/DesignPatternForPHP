<?php

namespace design_pattern\Builder;

use design_pattern\Builder\AbstractBuilder;

class director
{
    /** @var AbstractBuilder $builder 実装内容のインスタンス */
    private $builder;

    /**
     * コンストラクタ
     *
     * @param AbstractBuilder $builder 実装内容のインスタンス
     *
     */
    public function __construct(AbstractBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * 実装内容を構築
     *
     * @see null makeTitle() タイトルを作成
     * @see null makeString() 文字を作成
     * @see null makeItems() リストを作成
     * @see null close() 閉じタグを作成
     *
     */
    public function build()
    {
        $this->builder->makeTitle('Greeting');
        $this->builder->makeString('朝から昼にかけて');
        $this->builder->makeItems(array('おはようございます。', 'こんにちは。'));
        $this->builder->makeString('夜に');
        $this->builder->makeItems(array('こんばんわ。', 'おやすみなさい。', 'さようなら。'));
        $this->builder->close();
    }
}

<?php

namespace design_pattern\TemplateMethod;

/**
 * アルゴリズム構造の骨組みだけがある親クラス
 *  ほとんどの実装はサブクラスに任せる
 *
 */
abstract class AbstractDisplay
{
    /**
     * 開く
     *
     */
    abstract protected function open();

    /**
     * 表示する
     *
     */
    abstract protected function show();

    /**
     * 閉じる
     *
     */
    abstract protected function close();

    /**
     * 抽象クラスを処理するクラス
     *
     * @see string open()
     * @see string show()
     * @see string close()
     */
    final public function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->show();
        }
        $this->close();
    }
}

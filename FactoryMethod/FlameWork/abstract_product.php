<?php

namespace design_pattern\FactoryMethod\FlameWork;

/**
 * 製品の抽象クラス(骨組み)
 *  実装する内容をここで定義する
 */
abstract class abstract_product
{
    /**
     * 使う処理
     *
     */
    abstract public function apply();
}

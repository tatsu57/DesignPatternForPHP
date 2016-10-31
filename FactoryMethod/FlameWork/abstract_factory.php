<?php

namespace design_pattern\FactoryMethod\FlameWork;

/**
 * 製品を登録するクラス(骨組み)
 *  TemplateMethodでサブクラスに実装内容を任せる
 *
 */
abstract class abstract_factory
{
    /**
     * 登録の一連の処理
     *
     * @param string $owner オーナー
     *
     * @see obj createProduct() 製品を作る処理
     * @see null registerProduct() 製品を登録する処理
     *
     * @return obj
     */
    public final function create($owner)
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    /**
     * 製品を作る処理
     *
     * @param string $owner オーナー
     */
    abstract protected function createProduct($owner);

    /**
     * 製品を登録する処理
     *
     * @param obj $product 製品のインスタンス
     */
    abstract protected function registerProduct($product);
}

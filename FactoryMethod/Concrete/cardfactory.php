<?php

namespace design_pattern\FactoryMethod\Concrete;

use design_pattern\FactoryMethod\FlameWork\abstract_factory;
use design_pattern\FactoryMethod\Concrete\idCard;
use design_pattern\FactoryMethod\Concrete\shopCard;

class CardFactory extends abstract_factory
{
    /** @var array $owners オーナーを配列で格納 */
    private $owners = array();

    /**
     * 製品を作る処理
     *
     * @param string $owner オーナー
     *
     * @return obj
     */
    protected function createProduct($owner)
    {
        //インスタンス生成をここで制御する
        return new idCard($owner);
        // return new shopCard($owner);
    }

    /**
     * 製品を登録する
     *
     * @param obj $product 作った製品
     *
     */
    protected function registerProduct($product)
    {
        array_push($this->owners, $product->getOwner());
    }

    /**
     * オーナーをすべて取得
     *
     * @return array 
     */
    public function getOwners()
    {
        return $this->owners;
    }
}

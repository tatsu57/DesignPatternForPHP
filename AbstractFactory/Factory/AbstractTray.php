<?php

namespace design_pattern\AbstractFactory\Factory;

use design_pattern\AbstractFactory\Factory\AbstractItem;

abstract class AbstractTray extends AbstractItem
{
    /**@var array $arrayList リストを格納*/
    protected $arrayList = array();

    /**
     * コンストラクタ
     *
     * @param string $caption 見出し
     *
     * @see volid __construct 親クラスのコンストラクタ
     */
    public function __construct($caption)
    {
        parent::__construct($caption);
    }

    /**
     * リストを配列に追加
     *
     * @param AbstractItem $item アイテムを配列に格納
     */
    public function add(AbstractItem $item)
    {
        array_push($this->arrayList, $item);
    }
}

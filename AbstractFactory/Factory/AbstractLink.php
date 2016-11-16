<?php

namespace design_pattern\AbstractFactory\Factory;

use design_pattern\AbstractFactory\Factory\AbstractItem;

abstract class AbstractLink extends AbstractItem
{
    /**@var string $url URL*/
    protected $url;

    /**
     * コンストラクタ
     *
     * @param string $caption 見出し
     * @param string $url url
     *
     * @see volid __construct() 親クラスのコンストラクタ
     */
    public function __construct($caption, $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}

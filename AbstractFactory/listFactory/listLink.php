<?php

namespace design_pattern\AbstractFactory\listFactory;

use design_pattern\AbstractFactory\Factory\AbstractLink;

class listLink extends AbstractLink
{
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
        parent::__construct($caption, $url);
    }

    /**
     * リストのHTMLを作成
     *
     * @return string 
     */
    public function makeHTML()
    {
        return "<li><a href=\"$this->url\">$this->caption</a></li>";
    }
}

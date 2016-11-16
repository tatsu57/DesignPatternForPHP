<?php

namespace design_pattern\AbstractFactory\listFactory;

use design_pattern\AbstractFactory\Factory\AbstractTray;

class listTray extends AbstractTray
{
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
     * トレイのHTMLを作成
     *
     * @see string makeHTML() リストのHTML
     *
     * @return string
     */
    public function makeHTML()
    {
        $buffer = '';
        $buffer .= "<li>\n";
        $buffer .= $this->caption."\n";
        $buffer .= "<ul>\n";

        foreach ($this->arrayList as $item) {
            $buffer .= $item->makeHTML();
        }

        $buffer .= "</ul>\n";
        $buffer .= "</li>\n";

        return $buffer;
    }
}

<?php

namespace design_pattern\AbstractFactory\listFactory;

use design_pattern\AbstractFactory\Factory\AbstractPage;

class listPage extends AbstractPage
{
    /**
     * コンストラクタ
     *
     * @param string $titile タイトル
     * @param string $author 作者
     *
     * @see volid __construct() 親クラスのコンストラクタ
     */
    public function __construct($title, $author)
    {
        parent::__construct($title, $author);
    }

    /**
     * ページのHTMLを生成
     *
     * @see string makeHTML() リストやトレイのHTMLを生成
     *
     * @return string
     */
    public function makeHTML()
    {
        $buffer = '';
        $buffer .= "<html><head><title>".$this->title."</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>".$this->title."</h1>\n";
        $buffer .= "<ul>\n";

        foreach ($this->content as $item) {
            $buffer .= $item->makeHTML();
        }

        $buffer .= "</ul>\n";
        $buffer .= "<hr><address>".$this->author."</address>\n";
        $buffer .= "</body></html>\n";

        return $buffer;
    }
}

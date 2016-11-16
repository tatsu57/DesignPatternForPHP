<?php

namespace design_pattern\AbstractFactory\listFactory;

use design_pattern\AbstractFactory\Factory\AbstractFactory;
use design_pattern\AbstractFactory\listFactory\listLink;
use design_pattern\AbstractFactory\listFactory\listTray;
use design_pattern\AbstractFactory\listFactory\listPage;

class listFactory extends AbstractFactory
{
    /**
     * リンクを作成
     *
     * @param string $caption 見出し
     * @param string $url url
     *
     * @see listLink listLink() リンク作成の実装クラス
     *
     * @return listLink
     */
    public function createLink($caption, $url)
    {
        return new listLink($caption, $url);
    }

    /**
     * トレイを作成
     *
     * @param string $caption 見出し
     *
     * @see listTray listTray() トレイを作成する実装クラス
     *
     * @return listTray
     */
    public function createTray($caption)
    {
        return new listTray($caption);
    }

    /**
     * ページを作る
     *
     * @param string $titile タイトル
     * @param string $author 作者
     *
     * @return listPage listPage() ページを作成する実装クラス
     */
    public function createPage($title, $author)
    {
        return new listPage($title, $author);
    }
}

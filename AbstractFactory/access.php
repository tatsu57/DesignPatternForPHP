<?php

namespace design_pattern\AbstractFactory;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\AbstractFactory\Factory\AbstractFactory;

class access
{
    /**
     * メインアクセスメソッド
     *
     * @param string $classname クラス名
     *
     * @see AbstractFactory getFactory() 対象となるクラスを取得
     * @see listLink createLink() リンクリストを作成
     * @see listTray createTray() トレイを作成
     * @see void add() リストを配列に格納
     * @see listPage createPage() ページを作成
     * @see string output() HTMLを生成
     */
    public static function main($classname)
    {
        $factory = AbstractFactory::getFactory($classname);

        $asahi    = $factory->createLink('朝日新聞', 'http://www.asahi.com/');

        $yomiuri  = $factory->createLink('読売新聞', 'http://www.yomiuri.co.jp/');
        $us_yahoo = $factory->createLink('Yahoo!', 'http://www.yahoo.com/');
        $jp_yahoo = $factory->createLink('Yahoo!Japan', 'http://www.yahoo.co.jp/');
        $excite   = $factory->createLink('Excite', 'http://www.excite.com/');
        $google   = $factory->createLink('Google', 'http://www.google.com/');

        $traynews = $factory->createTray('新聞');
        $traynews->add($asahi);
        $traynews->add($yomiuri);

        $trayyahoo = $factory->createTray('Yahoo');
        $trayyahoo->add($us_yahoo);
        $trayyahoo->add($jp_yahoo);

        $traysearch = $factory->createTray('サーチエンジン');
        $traysearch->add($trayyahoo);
        $traysearch->add($excite);
        $traysearch->add($google);

        $page = $factory->createPage('LinkPage', '結城 浩');

        $page->add($traynews);
        $page->add($traysearch);

        $page->output();
    }
}

access::main('design_pattern\AbstractFactory\listFactory\listFactory');

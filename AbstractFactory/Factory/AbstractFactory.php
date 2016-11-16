<?php

namespace design_pattern\AbstractFactory\Factory;

use design_pattern\AbstractFactory\listFactory\listFactory;

abstract class AbstractFactory
{
    /**
     * 対象となるクラスを取得
     *
     * @param string $classname クラス名
     *
     * @return obj
     */
    public static function getFactory($classname)
    {
        $factory = null;

        try{
            $factory = new $classname();
        }catch(Exception $e){
            throw new \Exception('item_code [' . $classname . '] not found !');
        }
        return $factory;
    }

    /**
     * リンクを作る抽象メソッド
     *
     * @param string $caption 見出し
     * @param string $url URL
     */
    abstract public function createLink($caption, $url);

    /**
     * トレイを作る抽象メソッド
     *
     * @param string $caption 見出し
     */
    abstract public function createTray($caption);

    /**
     * ページを作る抽象メソッド
     *
     * @param string $title タイトル
     * @param string $author 作者
     *
     */
    abstract public function createPage($title, $author);
}

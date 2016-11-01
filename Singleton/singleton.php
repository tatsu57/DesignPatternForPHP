<?php

namespace design_pattern\Singleton;

class Singleton{

    private function __construct()
    {
        echo 'インスタンスを生成しました。'."\n";
    }

    public static function getInstance()
    {
        $singleton = new Singleton();
        return $singleton;
    }
}

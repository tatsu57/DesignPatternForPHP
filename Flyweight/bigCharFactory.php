<?php

namespace design_pattern\Flyweight;

use design_pattern\Flyweight\bigchar;

class bigCharFactory
{
    private $pool = array();

    private function __construct()
    {

    }

    public static function getInstance()
    {
        return new bigCharFactory();
    }

    public function getBigChar($charname)
    {
        if (array_key_exists($charname, $this->pool)){
            return $this->pool[$charname];
        }
        $bc = new bigchar($charname);
        $this->pool[$charname] = $bc;

        return $bc;
    }
}

<?php

namespace design_pattern\Flyweight;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Flyweight\bigchar;

class access
{
    /**
     * メインメソッド
     *
     * @param boolean $shared インスタンスを共有するか判定
     *
     * @see bigString new bigString() Flyweightのクライアント役
     * @see void printAll()　すべての結果を表示
     */
    public static function main($shared)
    {
        $time_start = microtime(true);

        $args = array();
        for ($i = 0; $i < 100000; $i++) {
            array_push($args, rand(1,9));
        }
        $bs = new bigString($args, $shared);
        $bs->printAll();

        echo 'time : '.(microtime(true) - $time_start)."\n";
        echo 'memory_usage : '.memory_get_usage()."\n";
        echo 'max_memory_usage : '.memory_get_peak_usage()."\n";
    }
}
access::main(false);

//共有あり
// time : 4.6525149345398
// memory_usage : 24823360
// max_memory_usage : 24833328

//共有なし
// time : 7.6071798801422
// memory_usage : 67363160
// max_memory_usage : 67634504

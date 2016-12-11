<?php

namespace design_pattern\Memento;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Memento\gamer;

/**
 * caketaker役
 *
 */
class access
{
    /**
     * メインメソッド
     *
     * @see gamer new gamer() ゲーマーのインスタンス(originator)
     * @see void bet() GAMEの勝敗を判定
     * @see int getMoney() お金を取得
     * @see memento createMemento() memento役のoriginator役に情報を保存
     * @see void restoreMemento() mementoの情報をoriginator役に復元
     */
    public static function main()
    {
        $gamer = new gamer(100);

        $memento = $gamer->createMemento();

        for ($i = 0; $i < 1000; $i++) {
            echo "====$i\n";
            echo "現状: ".$gamer."\n";
            $gamer->bet();
            echo "所持金は".$gamer->getMoney()."になりました\n";

            //Mementoの取り扱いの決定
            if ($gamer->getMoney() > $memento->getMoney()){
                $memento = $gamer->createMemento();
                echo "保存しました\n";
            }

            if($gamer->getMoney() > ($memento->getMoney() / 2)){
                $gamer->restoreMemento($memento);
                echo "復元しました\n";
            }

            sleep(1);
        }
    }
}
access::main();

<?php

namespace design_pattern\Strategy;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Strategy\player;
use design_pattern\Strategy\winningStrategy;
use design_pattern\Strategy\probStrategy;

class access
{
    /**
     * メイン
     *
     * @see winningStrategy new winningStrategy() 勝ち戦略
     * @see probStrategy new probStrategy() 分析戦略
     * @see player new player() プレイヤー
     * @see hand nextHand() 次の手を取得
     * @see boolean isStrongThan() 勝ち判定
     * @see sting toString() 結果
     * @see void win() 勝ちの処理
     * @see void lose() 負けの処理
     * @see void even() 引き分けの処理
     */
    public static function main()
    {
        $player_01 = new player('TARO', new winningStrategy());
        $player_02 = new player('HANA', new probStrategy());

        for ($i = 0; $i < 10000; $i++) {

            $nextHand_01 = $player_01->nextHand();
            $nextHand_02 = $player_02->nextHand();

            if ($nextHand_01->isStrongThan($nextHand_02)){
                echo "winner:".$player_01->toString();
                $player_01->win();
                $player_02->lose();
            }elseif($nextHand_02->isStrongThan($nextHand_01)){
                echo "winner:".$player_02->toString();
                $player_01->lose();
                $player_02->win();
            }else{
                echo "Even....";
                $player_01->even();
                $player_02->even();
            }

            echo "Total result";
            echo $player_01->toString();
            echo $player_02->toString()."\n";
        }
    }
}

access::main();

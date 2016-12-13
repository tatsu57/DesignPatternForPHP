<?php

namespace design_pattern\State;

use design_pattern\State\interfaceState;

/**
 * state役の実装クラス
 *
 */
class nightstate implements interfaceState
{
    /**
     * コンストラクタ
     *  singletonパターンのためprivateで
     *
     */
    private function __construct()
    {

    }

    /**
     * インスタンスを取得
     *
     * @return nightstate
     */
    public static function getInstance()
    {
        return new nightstate();
    }

    /**
     * 時間判定
     *
     * @param interfaceContext $context context役のインスタンス
     * @param int $hour 時刻
     *
     * @see void changeState() 状態を変更
     */
    public function doClock(interfaceContext $context, $hour)
    {
        if ((9 <= $hour && $hour < 12) || (13 <= $hour && $hour < 17) ){
            $context->changeState(daystate::getInstance());
        }elseif($hour == 12){
            $context->changeState(lunchtimestate::getInstance());
        }
    }

    /**
     * 金庫を使用
     *
     * @param interfaceContext $context context役のインスタンス
     *
     * @return string
     */
    public function doUse(interfaceContext $context)
    {
        return $context->callSecurityCenter("非常 : 夜間の金庫使用!");
    }

    /**
     * 非常ベルを使用
     *
     * @param interfaceContext $context context役のインスタンス
     *
     * @return string
     */
    public function doAlarm(interfaceContext $context)
    {
        return $context->callSecurityCenter("非常ベル(夜間)");
    }

    /**
     * 電話を使用
     *
     * @param interfaceContext $context context役のインスタンス
     *
     * @return string
     */
    public function doPhone(interfaceContext $context)
    {
        return $context->recordLog("夜間の通話録音");
    }

    /**
     * クラスが呼ばれたら
     *
     * @return string
     */
    public function __toString()
    {
        return "[夜間]";
    }
}

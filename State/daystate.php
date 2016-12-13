<?php

namespace design_pattern\State;

use design_pattern\State\interfaceState;

/**
 * state役の実装クラス
 *
 */
class daystate implements interfaceState
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
     * @return daystate
     */
    public static function getInstance()
    {
        return new daystate();
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
        if($hour < 9 || 17 <= $hour){
            $context->changeState(nightstate::getInstance());
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
        return $context->recordLog("金庫使用(昼間)");
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
        return $context->callSecurityCenter("非常ベル(昼間)");
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
        return $context->callSecurityCenter("通常の通話(昼間)");
    }

    /**
     * クラスが呼ばれたら
     *
     * @return string
     */
    public function __toString()
    {
        return "[昼間]";
    }
}

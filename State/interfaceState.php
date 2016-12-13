<?php

namespace design_pattern\State;

/**
 * state役のインターフェイス
 *
 */
interface interfaceState
{
    /**
     * 時間判定
     *
     * @param interfaceContext $context context役のインスタンス
     * @param int $hour 時刻
     */
    public function doClock(interfaceContext $context, $hour);

    /**
     * 金庫を使用
     *
     * @param interfaceContext $context context役のインスタンス
     */
    public function doUse(interfaceContext $context);

    /**
     * 非常ベルを使用
     *
     * @param interfaceContext $context context役のインスタンス
     */
    public function doAlarm(interfaceContext $context);

    /**
     * 電話を使用
     *
     * @param interfaceContext $context context役のインスタンス
     */
    public function doPhone(interfaceContext $context);
}

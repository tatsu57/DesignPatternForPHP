<?php

namespace design_pattern\State;

/**
 * context役の抽象クラス
 *
 */
interface interfaceContext
{
    /**
     * 時間をセット
     *
     * @param int $hour 時間
     */
    public function setClock($hour);

    /**
     * 状態を変更
     *
     * @param interfaceState $state state役のインスタンス
     */
    public function changeState(interfaceState $state);

    /**
     * セキュリティセンターに電話
     *
     * @param string $msg 時間
     */
    public function callSecurityCenter($msg);

    /**
     * ログを残す
     *
     * @param string $msg 時間
     */
    public function recordLog($msg);
}

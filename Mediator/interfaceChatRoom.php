<?php

namespace design_pattern\Mediator;

/**
 * Mediator役のinterface
 */
interface interfaceChatRoom
{
    /**
     * ログイン処理
     *
     * @param abstractUser $user colleage役のインスタンス
     */
    public function login(abstractUser $user);

    /**
     * メッセージを送信
     *
     * @param string $from 送信元
     * @param string $to 送信先
     * @param string $message メッセージ
     */
    public function sendMessage($from, $to, $message);
}

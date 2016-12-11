<?php

namespace design_pattern\Mediator;

use design_pattern\Mediator\interfaceChatRoom;

/**
 * Mediator役の実装クラス
 */
class ChatRoom implements interfaceChatRoom
{
    /** @var array $users ユーザーを格納する配列*/
    private $users = array();

    /**
     * ログイン処理
     *
     * @param abstractUser $user colleage役のインスタンス
     *
     * @see void setChatroom() colleage役のインスタンスにMediator役をセット
     * @see string getName() 名前と取得
     */
    public function login(abstractUser $user)
    {
        $user->setChatroom($this);
        if (!array_key_exists($user->getName(), $this->users)) {
            $this->users[$user->getName()] = $user;
            echo $user->getName()."さんが入室しました。\n";
        }
    }

    /**
     * メッセージを送信
     *
     * @param string $from 送信元
     * @param string $to 送信先
     * @param string $message メッセージ
     *
     * @see void receiveMessage() メッセージを受信
     */
    public function sendMessage($from, $to, $message)
    {
        if (array_key_exists($to, $this->users)) {
            $this->users[$to]->receiveMessage($from, $message);
        } else {
            echo $to."さんは入室していないようです\n";
        }
    }
}

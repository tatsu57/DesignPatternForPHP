<?php

namespace design_pattern\Mediator;

/**
 * colleage役の抽象クラス
 */
abstract class abstractUser
{
    /** interfaceChatRoom $chatroom Mediator役 */
    protected $chatroom;

    /**
     * ユーザー名を取得
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * チャットルームを取得
     *
     * @return interfaceChatRoom
     */
    public function getChatroom()
    {
        return $this->chatroom;
    }

    /**
     * チャットルームをセット
     *
     * @param interfaceChatRoom $value Mediator役
     */
    public function setChatroom(interfaceChatRoom $value)
    {
         $this->chatroom = $value;
    }

    /**
     * メッセージを送信
     *
     * @param string $to 送信先
     * @param string $message メッセージ
     *
     * @see void sendMessage() メッセージを送信
     */
    public function sendMessage($to, $message)
    {
        $this->chatroom->sendMessage($this->name, $to, $message);
    }

    /**
     * メッセージを受信
     *
     * @param string $from 送信元
     * @param string $message メッセージ
     */
    abstract public function receiveMessage($from, $message);
}

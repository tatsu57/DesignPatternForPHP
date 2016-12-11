<?php

namespace design_pattern\Mediator;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Mediator\ChatRoom;
use design_pattern\Mediator\User;
use design_pattern\Mediator\guest;

class access
{
    /**
     * メインメソッド(クライアント)
     *
     * @see ChatRoom new ChatRoom() チャットルームのインスタンス(Mediator)
     * @see User new User() ユーザーのインスタンス(colleage役)
     * @see guest new guest() ゲストのインスタンス(colleage役)
     * @see void login() ログイン処理
     * @see void sendMessage() メッセージを送信
     *
     */
    public static function main()
    {
        $chatroom = new ChatRoom();

        $sasaki = new User('佐々木');
        $suzuki = new User('鈴木');
        $yoshida = new User('吉田');
        $kawamura = new User('川村');
        $tajima = new User('田島');
        $guest = new guest();

        $chatroom->login($sasaki);
        $chatroom->login($suzuki);
        $chatroom->login($yoshida);
        $chatroom->login($kawamura);
        $chatroom->login($tajima);
        $chatroom->login($guest);

        $sasaki->sendMessage('鈴木', '来週の予定は？') ;
        $suzuki->sendMessage('川村', '秘密です') ;
        $yoshida->sendMessage('萩原', '元気ですか？') ;
        $tajima->sendMessage('佐々木', 'お邪魔してます') ;
        $kawamura->sendMessage('吉田', '私事で恐縮ですが…') ;
        $guest->sendMessage('吉田', 'こんにちは');
    }
}

access::main();

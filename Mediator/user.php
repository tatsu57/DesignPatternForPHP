<?php

namespace design_pattern\Mediator;

use design_pattern\Mediator\abstractUser;

/**
 * colleage役の実装クラス
 */
class User extends abstractUser
{
    /** @var string $name ユーザー名*/
    protected $name;

    /**
     * コンストラクタ
     *
     * @param string $name ユーザー名
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * メッセージを受信
     *
     * @param string $from 送信元
     * @param string $message メッセージ
     *
     * @see string getName() ユーザー名
     */
    public function receiveMessage($from, $message)
    {
        echo $from."さんから".$this->getName()."さんへ : $message\n";
    }
}

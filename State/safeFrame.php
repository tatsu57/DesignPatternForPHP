<?php

namespace design_pattern\State;

use design_pattern\State\interfaceContext;
use design_pattern\State\daystate;

/**
 * 金庫警備のインスタンス(context役の実装クラス)
 *
 */
class safeFrame implements interfaceContext
{
    /**@var string $post_value POSTされた値*/
    private $post_value;

    /** @var interfaceState $state state役*/
    private $state;

    /**
     * コンストラクタ
     *
     * @param string $post_value POSTされた値
     *
     * @see daystate daystate::getInstance() 日中のインスタンスを取得(state役)
     */
    public function __construct($post_value)
    {
        $this->post_value = $post_value;
        $this->state = daystate::getInstance();
    }

    /**
     * アクションを開始
     *
     * @see string doUse() 金庫を使用
     * @see string doAlarm() 非常ベルを使用
     * @see string doPhone() 電話を使用
     *
     * @return string
     */
    public function actionPerformed()
    {
        if($this->post_value == 'cash_box'){

            return $this->state->doUse($this);

        }elseif($this->post_value == 'bell'){

            return $this->state->doAlarm($this);

        }elseif($this->post_value == 'call'){

            return $this->state->doPhone($this);

        }elseif($this->post_value == 'exit'){

            return '終了が押されました';

        }else{
            return "選択してください";
        }
    }

    /**
     * 状態を変更するメソッド
     *
     * @param interfaceState $state state役のインスタンス
     */
    public function changeState(interfaceState $state)
    {
        $this->state = $state;
    }

    /**
     * 時間をセット
     *
     * @param int $hour 時間
     *
     * @see void doClock() 時間をセット
     */
    public function setClock($hour)
    {
        $this->state->doClock($this, $hour);
    }

    /**
     * セキュリティセンターに電話
     *
     * @param string $msg 時間
     *
     * @return string
     */
    public function callSecurityCenter($msg)
    {
        return "call! ".$msg;
    }

    /**
     * ログを残す
     *
     * @param string $msg 時間
     *
     * @return string
     */
    public function recordLog($msg)
    {
        return "record...".$msg;
    }


}

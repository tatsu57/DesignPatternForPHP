<?php

namespace design_pattern\Command;

use design_pattern\Command\interfaceDrawable;

/**
 * Receiver役(受信者)・Invoker役(起動者)
 *
 */
class drawCanvas implements interfaceDrawable
{
    /** @var interfaceCommand $history コマンドの履歴*/
    private $history;

    /**
     * コンストラクタ
     *
     * @param interfaceCommand $history コマンドの履歴
     */
    public function __construct($history)
    {
        $this->history = $history;
    }

    /**
     * すべての実行
     *
     * @see void execute() 実行処理
     */
    public function paint()
    {
        $this->history->execute();
    }

    /**
     * 描写処理
     *
     * @param int $x 横軸の値
     * @param int $y 縦軸の値
     * @param int $char 文字
     */
    public function draw($x, $y, $char)
    {
        $draw_x = '';
        for ($i=0; $i < $x; $i++) {
            $draw_x .= $char;
        }

        for ($i = 0; $i < $y; $i++) {
            echo $draw_x."\n";
        }
    }
}

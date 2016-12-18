<?php

namespace design_pattern\Command;

use design_pattern\Command\interfaceCommand;

/**
 * ConcreteCommand役(commandの実装クラス)
 *
 */
class macroCommand implements interfaceCommand
{
    /** @var array $commands コマンドの履歴を貯める配列 */
    private $commands = array();

    /** @var interfaceCommand $redo リドゥ時の戻すために変数 */
    private $redo;

    /**
     * 実行処理(履歴内をすべて実行)
     *
     * @see void execute() 実行処理
     */
    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    /**
     * 履歴に追加
     *
     * @param interfaceCommand $cmd コマンド
     *
     */
    public function append(interfaceCommand $cmd)
    {
        if ($cmd != $this){
            array_push($this->commands, $cmd);
        }
    }

    /**
     * 履歴を一つ戻す
     *
     */
    public function undo()
    {
        if (! empty($this->commands)){
            $this->redo = array_pop($this->commands);
        }
    }

    /**
     * 履歴を一つ進める
     *
     */
    public function redo()
    {
        if (! empty($this->redo)){
            array_push($this->commands, $this->redo);
        }
    }

    /**
     * すべての履歴を削除
     *
     */
    public function clear()
    {
        $this->commands = array();
    }

}

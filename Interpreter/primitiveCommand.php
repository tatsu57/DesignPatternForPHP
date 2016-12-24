<?php

namespace design_pattern\Interpreter;

use design_pattern\Interpreter\abstractNode;

/**
 * TerminalExpression(終端となる表現)の役
 *  このクラスが最後に呼ばれる役
 *
 */
class primitiveCommand extends abstractNode
{
    /** @var string $name 現在のトークンの名前 */
    private $name;

    /**
     * 実行メソッド
     *
     * @param context $context Context(文脈、前後関係)の役
     *
     * @see void skipToken コマンドをスキップ
     * @see string currentToken() 現在のコマンドを取得
     * @see void parse() 実行メソッド
     */
    public function parse($context)
    {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);

        if ($this->name != 'go' && $this->name != 'right' && $this->name != 'left'){
            echo 'エラー[primitiveCommand]';
            exit;
        }
    }

    /**
     * 実行したコマンドの名前を構文構造を取得
     *
     * @see string getName() 実行したコマンドの名前を構文構造を取得
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

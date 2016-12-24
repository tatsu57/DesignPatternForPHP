<?php

namespace design_pattern\Interpreter;

use design_pattern\Interpreter\repeatCommandNode;
use design_pattern\Interpreter\primitiveCommand;

/**
 * NonterminalExpression(非終端となる表現)の役
 *  経由するクラス
 *
 */
class commandNode extends abstractNode
{
    /** @var obj $node 表現のインスタンス*/
    private $node;

    /**
     * 実行メソッド
     *
     * @param context $context Context(文脈、前後関係)の役
     *
     * @see string currentToken() 現在のコマンドを取得
     * @see repeatCommandNode new repeatCommandNode NonterminalExpression(非終端となる表現)のインスタンス
     * @see primitiveCommand new primitiveCommand() erminalExpression(終端となる表現)の役
     * @see void parse() 実行メソッド
     */
    public function parse($context)
    {
        if ($context->currentToken() == "repeat"){
            $this->node = new repeatCommandNode();
            $this->node->parse($context);
        }else{
            $this->node = new primitiveCommand();
            $this->node->parse($context);
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
        return $this->node->getName();
    }
}

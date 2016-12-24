<?php

namespace design_pattern\Interpreter;

use design_pattern\Interpreter\commandListNode;
use design_pattern\Interpreter\primitiveCommandNode;

/**
 * NonterminalExpression(非終端となる表現)の役
 *  経由するクラス
 *
 */
class repeatCommandNode extends abstractNode
{
    /** @var int $number 繰り返す回数 */
    private $number;

    /** @var commandListNode $commandListNode  NonterminalExpression(非終端となる表現)のインスタンス*/
    private $commandListNode;

    /**
     * 実行メソッド
     *
     * @param context $context Context(文脈、前後関係)の役
     *
     * @see void skipToken コマンドをスキップ
     * @see void nextToken() 次のコマンドを進む
     * @see int currentNumber() 繰り返す回数を取得
     * @see commandListNode new commandListNode NonterminalExpression(非終端となる表現)のインスタンス
     * @see void parse() 実行メソッド
     */
    public function parse($context)
    {
        $context->skipToken("repeat");
        $this->number = $context->currentNumber();
        $context->nextToken();
        $this->commandListNode = new commandListNode();
        $this->commandListNode->parse($context);
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
        return "[repeat".$this->number.$this->commandListNode->getName()."]";
    }

}

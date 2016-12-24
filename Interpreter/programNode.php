<?php

namespace design_pattern\Interpreter;

use design_pattern\Interpreter\commandListNode;

/**
 * NonterminalExpression(非終端となる表現)の役
 *  経由するクラス
 *
 */
class programNode extends abstractNode
{
    /** @var commandListNode $commandListNode NonterminalExpression(非終端となる表現)のリスト*/
    private $commandListNode;

    /**
     * 実行メソッド
     *
     * @param context $context Context(文脈、前後関係)の役
     *
     * @see void skipToken コマンドをスキップ
     * @see commandListNode new commandListNode NonterminalExpression(非終端となる表現)のインスタンス
     * @see void parse() 実行メソッド
     */
    public function parse($context)
    {
        //例外処理がいる
        $context->skipToken("program");
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
        return "[program".$this->commandListNode->getName()."]";
    }
}

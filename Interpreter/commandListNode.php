<?php

namespace design_pattern\Interpreter;

use design_pattern\Interpreter\commandNode;

/**
 * NonterminalExpression(非終端となる表現)の役
 *  経由するクラス
 *
 */
class commandListNode extends abstractNode
{
    /** @var array $lists NonterminalExpression(非終端となる表現)のインスタンスを配列で保持*/
    private $lists = array();

    /**
     * 実行メソッド
     *
     * @param context $context Context(文脈、前後関係)の役
     *
     * @see string currentToken() 現在のトークンを取得
     * @see void skipToken コマンドをスキップ
     * @see commandNode new commandNode NonterminalExpression(非終端となる表現)のインスタンス
     * @see void parse() 実行メソッド
     */
    public function parse($context)
    {
        while(true){
            if ($context->currentToken() == null){
                break;
            }elseif($context->currentToken() == "end"){
                $context->skipToken("end");
                break;
            }else{
                $commandNode = new commandNode();
                $commandNode->parse($context);
                array_push($this->lists, $commandNode);
            }
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
        $tmp = '';
        foreach ($this->lists as $list) {
            $tmp .= ' '.$list->getName();
        }

        return "[".$tmp."]";
    }
}

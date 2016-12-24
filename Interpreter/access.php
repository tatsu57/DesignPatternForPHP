<?php

namespace design_pattern\Interpreter;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Interpreter;

/**
 * クライアント役
 *  構文木を組み立てる役
 *
 */
class access
{
    /**
     * メインメソッド
     *
     * @see programNode new programNode() NonterminalExpression(非終端となる表現)の役の最初のクラス
     * @see context new context() Context(文脈、前後関係)の役
     * @see void parse() 実行メソッド
     * @see string getName() 実行したコマンドの名前を構文構造を取得
     */
    public static function main()
    {
        $text = 'program:repeat:4:go:right:end';

        $node = new programNode();
        $node->parse(new context($text));

        echo $node->getName();
    }
}
access::main();

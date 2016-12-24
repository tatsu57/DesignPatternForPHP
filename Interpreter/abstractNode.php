<?php

namespace design_pattern\Interpreter;

/**
 * AbstractExpression(抽象的な表現)の役
 *  表現の具象クラスの共通のAPIを定まる
 *
 */
abstract class abstractNode
{
    /**
     * 実行メソッド
     *
     * @param context $context Context(文脈、前後関係)の役
     */
    abstract public function parse($context);

    /**
     * 実行したコマンドの名前を構文構造を取得
     *
     * @return string
     */
    abstract public function getName();
}

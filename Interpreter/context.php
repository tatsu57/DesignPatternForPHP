<?php

namespace design_pattern\Interpreter;

/**
 * Context(文脈、前後関係)の役
 *  インタプリタが構文解析を行うための情報を提供する役
 *
 */
class context
{
    /** @var array $tokenizer 実行されたコマンドを配列で保持 */
    private $tokenizer;

    /** @var string $currentToken 現在のコマンド*/
    private $currentToken;

    /**
     * コンストラクタ
     *
     * @param string $text 実行されるすべてのコマンド
     *
     * @see string nextToken() 次のコマンドに進む
     */
    public function __construct($text)
    {
        $this->tokenizer = explode(":", $text);
        $this->nextToken();
    }

    /**
     * 次のコマンドに進む
     *
     * @return string
     */
    public function nextToken()
    {
        if (! empty($this->tokenizer)){
            $this->currentToken = array_shift($this->tokenizer);
        }else{
            $this->currentToken = null;
        }
    }

    /**
     * 現在のコマンドを取得
     *
     * @return string
     */
    public function currentToken()
    {
        return $this->currentToken;
    }

    /**
     * コマンドをスキップ
     *
     * @param string $token スキップするコマンド
     *
     * @see string nextToken() 次のトークンに進む
     */
    public function skipToken($token)
    {
        if (!$token == $this->currentToken){
            echo 'エラー[context_skipToken]';
            exit;
        }

        $this->nextToken();
    }

    /**
     * 繰り返しの数を取得
     *
     * @return int
     */
    public function currentNumber()
    {
        return intval($this->currentToken);
    }
}

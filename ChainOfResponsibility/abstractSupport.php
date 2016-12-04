<?php

namespace design_pattern\ChainOfResponsibility;

abstract class abstractSupport
{
    /** @var $name サポート役の名前 */
    private $name;

    /**@var abstractSupport $next 次のサポート役 */
    private $next;

    /**
     * コンストラクタ
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 次のサポート役のインスタンスをセット
     *
     * @param abstractSupport $next のサポート役のインスタンス
     *
     * @return abstractSupport
     */
    public function setNext($next)
    {
        $this->next = $next;
        return $next;
    }

    /**
     * サポートの処理
     *
     * @param trouble $trouble トラブルのインスタンス
     *
     * @see boolean resolve() 解決したか判定
     * @see void done() 完了処理
     * @see void fail() 未解決処理
     * @see abstractSupport support() 次のサポート役の処理
     */
    final public function support($trouble)
    {
        if($this->resolve($trouble)){
            $this->done($trouble);
        }elseif(! is_null($this->next)){
            $this->next->support($trouble);
        }else{
            $this->fail($trouble);
        }
    }

    /**
     * サポート役の名前を取得
     *
     * @return string
     */
    public function __toString()
    {
        return "[$this->name]";
    }

    /**
     * 解決したか判定
     *
     * @param trouble $trouble トラブルのインスタンス
     *
     * @return boolean
     */
    abstract protected function resolve($trouble);

    /**
     * 完了処理
     *
     * @param trouble $trouble トラブルのインスタンス
     */
    protected function done($trouble)
    {
        echo $trouble."is resolved by ".$this."\n";
    }

    /**
     * 未解決処理
     *
     * @param trouble $trouble トラブルのインスタンス
     */
    protected function fail($trouble)
    {
        echo $trouble."cannot be resolved"."\n";
    }
}

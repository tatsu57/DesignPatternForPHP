<?php

namespace design_pattern\Prototype;

class Manager
{
    /** @var array $showcase オブジェクトを格納する配列(ハッシュ)*/
    private $showcase = array();

    /**
     * 登録処理
     *
     * @param string $name 登録名
     * @param InterfaceProduct $proto 登録する実態のオブジェクト
     *
     * @return array
     */
    public function register($name, InterfaceProduct $proto)
    {
        return $this->showcase[$name] = $proto;
    }

    /**
     * 生成処理
     *  格納されている配列の対象のオブジェクトがない場合は例外処理を返す
     *
     * @param obj $protoname 登録した実態のオブジェクト
     *
     * @return obj
     */
    public function create($protoname)
    {
        if (!array_key_exists($protoname, $this->showcase)) {
            throw new \Exception('item_code [' . $protoname . '] not exists !');
        }
        return clone $this->showcase[$protoname];
    }
}

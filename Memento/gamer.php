<?php

namespace design_pattern\Memento;

class gamer
{
    /** @var int $money お金*/
    private $money;

    /** @var array $fruits フルーツの名前を格納する配列 */
    private $fruits = array();

    /** @var array $fruitnames フルーツの名前 */
    private $fruitsname = array(
        'りんご',
        'ぶどう',
        'バナナ',
        'みかん',
    );

    /**
     * コンストラクタ
     *
     * @param int $money お金
     */
    public function __construct($money)
    {
        $this->money = $money;
    }

    /**
     * お金を取得
     *
     * @return int
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * GAMEの勝敗を判定
     *
     * @see string フルーツの名前を取得
     *
     */
    public function bet()
    {
        $dice = rand(1,6);

        if ($dice == 1){
            $this->money += 100;
            echo "所持金が増えました。\n";
        }elseif($dice == 2){
            $this->money /= 2;
            echo "所持金が半分になりました。\n";
        }elseif($dice == 6){
            array_push($this->fruits, $this->getFruit());
            echo "フルーツ(".$this->getFruit().")をもらいました。\n";
        }else{
            echo "何も起こりませんでした。\n";
        }
    }

    /**
     * フルーツの名前を取得
     *
     * @return string
     */
    private function getFruit()
    {
        $prefix = "";
        $random = rand(0,3);
        if ($random == rand(0,3)){
            $prefix = 'おいしい';
        }
        return $prefix.$this->fruitsname[$random];
    }

    /**
     * memento役のoriginator役に情報を保存
     *
     * @see Memento new Memento() memento役のインスタンス
     * @see void addFruit() "おいしい"が頭についたフルーツの名前のみ、memento役の情報に追加される
     *
     */
    public function createMemento()
    {
        $m = new Memento($this->money);

        foreach ($this->fruits as $fruit) {
            if (strpos($fruit, 'おいしい') !== false){
                $m->addFruit($fruit);
            }
        }
        return $m;
    }

    /**
     * mementoの情報をoriginator役に復元
     *
     * @param memento $memento memento役のインスタンス
     *
     * @see array getFruits() memento役に保存してあるフルーツたち
     */
    public function restoreMemento(memento $memento)
    {
        $this->money = $memento->money;
        $this->fruits = $memento->getFruits();
    }

    /**
     * 名前を返す
     *
     * @return string
     */
    public function __toString()
    {
        $all_get_fruits = implode(',', $this->fruits);
        return "[money = $this->money , fruits = $all_get_fruits]";
    }

}

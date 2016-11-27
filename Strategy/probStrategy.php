<?php

namespace design_pattern\Strategy;

use design_pattern\Strategy\interfaceStrategy;
use design_pattern\Strategy\hand;

class probStrategy implements interfaceStrategy
{
    /** @var int $preHandValue １回目の手の*/
    private $preHandValue = 0;

    /** @var int $currentHandValue 現在の手*/
    private $currentHandValue = 0;

    /** @var 過去の手を分析するための過去結果*/
    private $history = array(
        array(1,1,1),
        array(1,1,1),
        array(1,1,1),
    );

    /**
     * 次の手を取得するメソッド
     *
     * @return hand
     */
    public function nextHand()
    {
        $bet = rand(0, $this->getSum($this->currentHandValue));

        $handvalue = 0;

        if ($bet < $this->history[$this->currentHandValue][0]){
            $handvalue = 0;
        }elseif($bet < $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]){
            $handvalue = 1;
        }else{
            $handvalue = 2;
        }

        $this->preHandValue = $this->currentHandValue;
        $this->currentHandValue = $handvalue;

        return hand::getHand($handvalue);
    }

    /**
     * 過去の合計するを取得
     *
     * @param int $hv 現在の手
     *
     * @return int
     */
    private function getSum($hv)
    {
        $sum = 0;
        for ($i = 0; $i < 3; $i++) {
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }

    /**
     * じゃんけんの学習
     *
     * @param boolean $win
     */
    public function study($win)
    {
        if ($win){
            $this->history[$this->preHandValue][$this->currentHandValue]++;
        }else{
            $this->history[$this->preHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->preHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }
}

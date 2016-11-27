<?php

namespace design_pattern\Strategy;

use design_pattern\Strategy\interfaceStrategy;
use design_pattern\Strategy\hand;

class winningStrategy implements interfaceStrategy
{
    /** @var boolean $won 1回前の結果*/
    private $won = false;

    /** @var hand $preHand 1回前の手のインスタンス*/
    private $preHand;

    /**
     * 次の手を取得するメソッド
     *
     * @return hand
     */
    public function nextHand()
    {
        if (!$this->won){
            $this->preHand = hand::getHand(rand(0,2));
        }
        return $this->preHand;
    }

    /**
     * じゃんけんの学習
     *
     * @param boolean $win
     */
    public function study($win)
    {
        $this->won = $win;
    }
}

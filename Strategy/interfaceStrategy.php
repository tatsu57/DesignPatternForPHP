<?php

namespace design_pattern\Strategy;

interface interfaceStrategy
{
    /**
     * 次の手を取得するメソッド
     *
     *
     */
    public function nextHand();

    /**
     * じゃんけんの学習
     *
     * @param boolean $win
     *
     */
    public function study($win);
}

<?php

namespace design_pattern\Strategy;

class player
{
    /** @var string $name プレーヤ名*/
    private $name;

    /** @var interfaceStrategy $strategy 戦略*/
    private $strategy;

    /** @var int $wincount 勝数*/
    private $wincount;

    /** @var int $losecount 負け数*/
    private $losecount;

    /** @var int $gamecount ゲーム数*/
    private $gamecount;

    /**
     * コンストラクタ
     *
     * @param string $name プレーヤ名
     * @param interfaceStrategy $strategy
     */
    public function __construct($name, $strategy)
    {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    /**
     * 次の手を取得
     *
     * @return hand
     */
    public function nextHand()
    {
        return $this->strategy->nextHand();
    }

    /**
     * 勝ちカウント
     *
     * @see void study() じゃんけんの学習
     */
    public function win()
    {
        $this->strategy->study(true);
        $this->wincount++;
        $this->gamecount++;
    }

    /**
     * 負けカウント
     *
     * @see void study() じゃんけんの学習
     */
    public function lose()
    {
        $this->strategy->study(false);
        $this->losecount++;
        $this->gamecount++;
    }

    /**
     * 引き分けカウント
     *
     */
    public function even()
    {
        $this->gamecount++;
    }

    /**
     * じゃんけん結果を文字列で
     *
     * @return string
     */
    public function toString()
    {
        return "[$this->name : $this->gamecount games $this->wincount win $this->losecount lose]";
    }
}

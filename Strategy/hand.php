<?php

namespace design_pattern\Strategy;

/**
 * じゃんけんのルールクラス
 *
 *
 */
class hand
{
    /** @var int グーの定数 */
    const HANDVALUE_GUU = 0;

    /** @var int チョキの定数 */
    const HANDVALUE_CHO = 1;

    /** @var int パーの定数 */
    const HANDVALUE_PAA = 2;

    /** @var array $name じゃんけんの名前 */
    private static $name = array('グー', 'チョキ', 'パー');

    /**@var int じゃんけんの手*/
    private $handvalue;

    /**
     * コンストラクタ
     *
     * @param int $handvalue じゃんけんの手
     */
    private function __construct($handvalue)
    {
        $this->handvalue = $handvalue;
    }

    /**
     * じゃんけんの手のインスタンスを取得
     *
     * @param int $handvalue じゃんけんの手
     *
     * @see hand new hand() 自分自身のクラス
     *
     * @return hand
     */
    public static function getHand($handvalue)
    {
        if ($handvalue == self::HANDVALUE_GUU){
            return new hand(self::HANDVALUE_GUU);
        }

        if($handvalue == self::HANDVALUE_CHO){
            return new hand(self::HANDVALUE_CHO);
        }

        return new hand(self::HANDVALUE_PAA);
    }

    /**
     * 強いか判定
     *
     * @param hand $hand 手のインスタンス
     *
     * @see int fight() 戦いの結果
     *
     * @return boolean
     */
    public function isStrongThan($hand)
    {
        return $this->fight($hand) == 1;
    }

    /**
     * 弱いか判定
     *
     * @param hand $hand 手のインスタンス
     *
     * @see int fight() 戦いの結果
     *
     * @return boolean
     */
    public function isWeakThan($hand)
    {
        return $this->fight($hand) == -1;
    }

    /**
     * 戦いの結果
     *  0 = あいこ　1 = 勝ち　-1 = 負け
     *
     * @param hand $hand 手のインスタンス
     *
     * @return int
     */
    private function fight($hand)
    {
        if ($this->handvalue == $hand->handvalue){
            return 0;
        }elseif(($this->handvalue + 1) % 3 == $hand->handvalue){
            return 1;
        }else{
            return -1;
        }
    }

    /**
     * じゃんけんの手を日本語で取得
     *
     * @return string
     */
    public function toString()
    {
        return self::$name[$this->handvalue];
    }
}

<?php

namespace design_pattern\Bridge;

use design_pattern\Bridge\display;

class countDisplay extends display
{
    /**
     * コンストラクタ
     *
     * @param displayImpl $displayImpl displayの実装クラス
     *
     * @see void parent::__construct 親クラスのコンストラクタ
     */
    public function __construct(displayImpl $displayImpl)
    {
        parent::__construct($displayImpl);
    }

    /**
     * 複数回、表示する
     *
     * @param int $times 回数
     *
     * @see void open() 開く処理(委譲)
     * @see void printContents() 内容を表示(委譲)
     * @see void close() 閉じる処理(委譲)
     */
    public function multiDisplay($times)
    {
        $this->open();

        for($i = 0; $i < $times; $i++){
            $this->printContents();
        }

        $this->close();
    }
}

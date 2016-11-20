<?php

namespace design_pattern\Bridge;

abstract class displayImpl
{
    /**
     * 開く処理の実装
     *
     */
    abstract public function rawOpen();

    /**
     * 内容を表示の実装
     *
     */
    abstract public function rawPrint();

    /**
     * 閉じる処理の実装
     *
     */
    abstract public function rawClose();
}

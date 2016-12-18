<?php

namespace design_pattern\Command;

interface interfaceDrawable
{
    /**
     * 描写処理
     *
     * @param int $x 横軸の値
     * @param int $y 縦軸の値
     * @param string $char 文字
     *
     */
    public function draw($x, $y, $char);
}

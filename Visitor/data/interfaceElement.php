<?php

namespace design_pattern\Visitor\data;

interface interfaceElement
{
    /**
     * visitor役を受け入れる
     *
     */
    public function accept($v);
}

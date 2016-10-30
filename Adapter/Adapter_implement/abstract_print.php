<?php

namespace design_pattern\Adapter\Adapter_implement;

abstract class abstract_print
{
    /**
     * 弱く表示
     *
     */
    abstract public function printWeak();

    /**
     * 強く表示
     *
     */
    abstract public function printStrong();
}

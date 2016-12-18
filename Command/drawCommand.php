<?php

namespace design_pattern\Command;

use design_pattern\Command\interfaceCommand;

/**
 * ConcreteCommand役(commandの実装クラス)
 *
 */
class drawCommand implements interfaceCommand
{
    /** @var interfaceDrawable $drawable Receiver役(受信者)にインスタンス*/
    protected $drawable;

    /** @var stdClass $position 縦軸と横軸のインスタンス*/
    private $position;

    /** @var string $char 文字 */
    private $char;

    /**
     * コンストラクタ
     *
     * @param interfaceDrawable $drawable Receiver役(受信者)にインスタンス
     * @param stdClass $position 縦軸と横軸のインスタンス
     * @param string $char 文字
     */
    public function __construct(interfaceDrawable $drawable, $position, $char)
    {
        $this->drawable = $drawable;
        $this->position = $position;
        $this->char     = $char;
    }

    /**
     * 実行処理
     *
     * @see void draw() 描写処理
     */
    public function execute()
    {
        $this->drawable->draw($this->position->x, $this->position->y, $this->char);
    }
}

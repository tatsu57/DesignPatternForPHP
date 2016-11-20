<?php

namespace design_pattern\Bridge;

class display{

    /** @var displayImpl $displayImpl displayの実装クラス*/
    private $displayImpl;

    /**
     * コンストラクタ
     *
     * @param displayImpl $displayImpl displayの実装クラス
     */
    public function __construct(displayImpl $displayImpl)
    {
        $this->displayImpl = $displayImpl;
    }

    /*
     * 開く処理(委譲)
     *
     * @see void rawOpen() 開く処理の実装
     */
    public function open()
    {
        $this->displayImpl->rawOpen();
    }

    /**
     * 内容を表示(委譲)
     *
     * @see void rawPrint() 内容を表示の実装
     */
    public function printContents()
    {
        $this->displayImpl->rawPrint();
    }

    /**
     * 閉じる処理(委譲)
     *
     * @see void rawClose() 閉じる処理の実装
     */
    public function close()
    {
        $this->displayImpl->rawClose();
    }

    /**
     * 表示する
     *
     * @see void open() 開く処理(委譲)
     * @see void printContents() 内容を表示(委譲)
     * @see void close() 閉じる処理(委譲)
     */
    final public function display()
    {
        $this->open();
        $this->printContents();
        $this->close();
    }
}

<?php

namespace design_pattern\Facade\pageMaker;

class htmlWriter
{
    /** @var string $writer HTMLの書き込み文字列*/
    private $writer = '';

    /**
     * タイトルをセット
     *
     * @param string $title タイトル
     */
    public function title($title)
    {
        $title = "<html><head><title>$title</title></head><body><h1>$title</h1>";
        $this->writer .= $title;
    }

    /**
     * パラグラフをセット
     *
     * @param string $msg パラグラフ
     */
    public function paragraph($msg)
    {
        $paragraph = "<p>$msg</p>";
        $this->writer .= $paragraph;
    }

    /**
     * パラグラフをセット
     *
     * @param string $href url
     * @param string $caption 文字
     */
    public function link($href, $caption)
    {
        $link = "<a href=\"$href\">$caption</a>";
        $this->paragraph($link);
    }

    /**
     * パラグラフをセット
     *
     * @param string $mailaddr メールアドレス
     * @param string $username ユーザー名
     */
    public function mailto($mailaddr, $username)
    {
        $mailto = "mailto: $mailaddr, $username";
        $this->link($mailto, $username);
    }

    /**
     * HTMLの閉じタグ
     *
     */
    public function close()
    {
        $close = "</body></html>";
        $this->writer .= $close;
    }

    /**
     * HTMLの文字列を取得
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->writer;
    }
}

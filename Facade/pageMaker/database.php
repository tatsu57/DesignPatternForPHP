<?php

namespace design_pattern\Facade\pageMaker;

class database
{
    /** @var string $filename ファイル名*/
    private $filename;

    /**
     * コンストラクタ
     *
     * @param string $dbname DB名
     *
     */
    public function __construct($dbname)
    {
        $filename = $dbname.".txt";
        $file_path = dirname(__DIR__).'/'.$filename;

        if (file_exists($file_path)){
            $this->filename = $filename;
        }else{
            throw new \RuntimeException("no exist file name");
        }
    }

    /**
     * DBからメールアドレスのユーザー名を取得する
     *
     * @param string $access_mailaddr 指定されたメールアドレス
     *
     * @return string
     */
    public function getUsername($access_mailaddr)
    {
        $file = fopen($this->filename, "r");

        while ($line = fgets($file)) {
            list($mailaddr, $username) = explode('=', $line);
            if ($mailaddr === $access_mailaddr){
                return rtrim($username);
            }
        }

        fclose($file);

        throw new \RuntimeException("no exist mailaddress");
    }

}

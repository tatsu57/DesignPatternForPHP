<?php

namespace design_pattern\State;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\State\daystate;

class access
{
    /**
     * メインクラス
     *
     * @param string $value POSTされたデータ
     *
     * @see safeFrame new safeFrame() 金庫警備のインスタンス(context役)
     * @see void setClock() 時間をセット
     * @see string actionPerformed() アクションを開始
     *
     * @return array
     */
    public static function main($value)
    {
        $frame = new safeFrame($value);

        $now_hour = rand(0,23);
        $frame->setClock($now_hour);
        $result = $frame->actionPerformed();

        return array("now_hour" => $now_hour, "result" => $result);
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $result = access::main($_POST["value"]);
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php if($result):?>
            <h1>現在時刻は<?php echo $result['now_hour'];?>:00</h1>
            <div class="result">
                <p>結果</p>
                <p><?php echo $result['result'];?></p>
            </div>
        <?php endif;?>
        <form action="" method="post">
            <p>処理内容</p>
            <select name="value" size="4">
                <option value="cash_box">金庫使用</option>
                <option value="bell">非常ベル</option>
                <option value="call">通常通話</option>
                <option value="exit">終了</option>
            </select>
            <p><input type='submit' value='送信'></p>
        </form>
    </body>
</html>

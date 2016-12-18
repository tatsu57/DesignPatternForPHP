<?php

namespace design_pattern\Command;

require dirname(__DIR__).'/vendor/autoload.php';

use design_pattern\Command\drawCanvas;
use design_pattern\Command\drawCommand;
use design_pattern\Command\macroCommand;

/**
 * Client役のクラス・Invoker役(起動者)
 *
 */
class access
{
    /**
     * メインメソッド
     *
     * @see macroCommand new macroCommand() コマンドを実行したり、履歴を保存したり(ConcreteCommand役)
     * @see drawCanvas new drawCanvas() Receiver役(受信者)・Invoker役(起動者)のインスタンス
     * @see drawCommand new drawCommand() ConcreteCommand役(commandの実装クラス)
     * @see stdClass find_position() 縦軸を横軸のデータを取得
     * @see void execute() 実行処理
     * @see void append() コマンドを履歴に追加
     * @see void undo() 一つ戻る
     * @see void redo() 一つ進む
     * @see void paint() 現在の履歴のコマンドをすべて実行
     */
    public function main()
    {
        $history = new macroCommand();

        $canvas = new drawCanvas($history);

        $position = $this->find_position(10, 7);
        $drawCommand_01 = new drawCommand($canvas, $position, "*");
        $drawCommand_01->execute();
        $history->append($drawCommand_01);

        $position = $this->find_position(2, 4);
        $drawCommand_02 = new drawCommand($canvas, $position, "|");
        $drawCommand_02->execute();
        $history->append($drawCommand_02);

        $position = $this->find_position(5, 1);
        $drawCommand_03 = new drawCommand($canvas, $position, "_=_");
        $drawCommand_03->execute();
        $history->append($drawCommand_03);

        $history->undo();
        // $history->redo();
        // $history->clear();

        echo 'final_result'."\n";
        $canvas->paint();
    }

    /**
     * 縦軸を横軸のデータを取得
     *
     * @param int $x 横軸の値
     * @param int $y 縦軸の値
     *
     * @return stdClass
     */
    private function find_position($x, $y)
    {
        $position = new \stdClass();
        $position->x = $x;
        $position->y = $y;

        return $position;
    }
}

$access = new access();
$access->main();

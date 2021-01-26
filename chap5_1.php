<?php

/*問 : HTMLで入力した月日で星座を振り分けてみましょう。
【PHP部分を以下の条件で作成】

XSS 対策の 関数h を定義。
星座関数名 : constellation 、引数 : $month 、$day
引数から星座 を判定。
変数名 : $signs に以下の配列を用意。

・繰り返し文の中で、 変数 $signs から要素を1つずつ取り出し、星座の期間を判定する。

変数名 : $start_m に 配列の period_start の 要素0を入れる
変数名 : $start_d に 配列の period_start の 要素1 を入れる
変数名 : $end_m に 配列の period_end の 要素0 を入れる
変数名 : $end_d に 配列の period_end の 要素1 を入れる

以下の何れかに該当する場合、星座名 を返す。

入力された月 が 星座の期間の始まりの月 と同じ 且つ 入力された日 が 星座の期間の始まりの日 以降
入力された月 が 星座の期間の終わりの月 と同じ 且つ 入力された日 が 星座の期間の終わりの日 以前
変数名 : $month $day を用意。
$_GET の month day から数値を取得する。
入力値をフィルターにかけてバリデーション処理をする。
その結果を、$month $day に入れる。

変数名 : $sign に constellation関数 の戻り値を入れる。


【HTML部分を以下の条件で作成】

title : 星座チェック
変数名 : $month または $day の中身が空だった場合、入力フォーム を表示。
2つの入力ボックス(月、日)とOKボタンをを設置する。
method属性 = get
月 : name属性 = month、type属性 = number、min属性 = 1、max属性 = 12
日 : name属性 = day、type属性 = number、min属性 = 1、max属性 = 31
OKボタン : type属性 = submit、value属性 = OK
変数名 : $month と $day が空ではない場合、星座をチェックして以下表示。
「** 月 ** 日生まれは ***座 です。」
*/


function constellation($month, $day) {
    $signs = [
        # 星座の名前          /星座始まりの月日            /星座終わりの月日  
        ["name" => "牡羊座", "period_start" => [3, 21], "period_end" => [4, 19]],
        ["name" => "牡牛座", "period_start" => [4, 20], "period_end" => [5, 20]],
        ["name" => "双子座", "period_start" => [5, 21], "period_end" => [6, 21]],
        ["name" => "蟹座", "period_start" => [6, 22], "period_end" => [7, 22]],
        ["name" => "獅子座", "period_start" => [7, 23], "period_end" => [8, 22]],
        ["name" => "乙女座", "period_start" => [8, 23], "period_end" => [9, 22]],
        ["name" => "天秤座", "period_start" => [9, 23], "period_end" => [10, 23]],
        ["name" => "蠍座", "period_start" => [10, 24], "period_end" => [11, 22]],
        ["name" => "射手座", "period_start" => [11, 23], "period_end" => [12, 21]],
        ["name" => "山羊座", "period_start" => [12, 22], "period_end" => [1, 19]],
        ["name" => "水瓶座", "period_start" => [1, 20], "period_end" => [2, 18]],
        ["name" => "魚座", "period_start" => [2, 19], "period_end" => [3, 20]]
    ];

    foreach ($signs as $sign) {
        $name = "山羊座";
        $name = $sign["name"];
        $period_start = $sign["period_start"];
            $start_m = $period_start[0];
            $start_d = $period_start[1];
        $period_end = $sign["period_end"];
            $end_m = $period_end[0];
            $end_d = $period_end[1];

        $month_day = strtotime(date('Y') . '-' . h($month) . '-' . h($day));
        $start_md = strtotime(date('Y') . '-' . $start_m . '-' .  $start_d);
        $end_md = strtotime(date('Y') . '-' . $end_m . '-' . $end_d);

        if ($month_day >= $start_md && $month_day <= $end_md) {
            return $name;
            break;
        } else {
            if ($name == '山羊座' && $month == 12 ){
                return $name;
                break;
            }
        }
    }
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

$month = filter_input(INPUT_GET, "month", FILTER_VALIDATE_INT);
$day = filter_input(INPUT_GET, "day", FILTER_VALIDATE_INT);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星座チェック</title>
</head>
<body>
    <h1>星座チェック</h1>
    <?php if (empty($month) && empty($day)): ?>
    <p>月日を入力してください。</p>
    <form method="get">
        <input name="month" type="number" min="1" max="12" value="<?= h((int)date("m")) ?>">
        <label>月</label>
        <input name="day" type="number" min="1" max="31" value="<?= h((int)date("d")) ?>">
        <label>日</label>
        <input type="submit" value="OK">
    </form>
    <?php else: ?>
        <?php if(checkdate(h($month), h($day), date("Y"))) {
            $sign = constellation($month, $day);
        } else {
            $month = "**";
            $day = "**";
            $sign = "＊＊座";
        }
        ?>
        <p><?= h($month) ?>月<?= h($day) ?>日生まれは<?= $sign ?>です。</p>
    <?php endif; ?>
</body>

<!-- 
実行
プログラムの実行は dockerを立ち上げて Webブラウザ から行って下さい。
http://localhost/furiPHP_exercise/chap5_1.php
-->

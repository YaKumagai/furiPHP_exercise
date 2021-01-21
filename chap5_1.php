<?php
/*
var_dump("ハロー！")
問 : HTMLで入力した月日で星座を振り分けてみましょう。
【PHP部分を以下の条件で作成】

XSS 対策の 関数h を定義。
星座関数名 : constellation 、引数 : $month 、$day
引数から星座 を判定。
変数名 : $signs に以下の配列を用意。

*/

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

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap5_1.php
/*
実行
プログラムの実行は dockerを立ち上げて Webブラウザ から行って下さい。

Google Chrome のアドレスバーにhttp://localhost/furiPHP_exercise/chap5_1.phpと入力します。
*/
<?php
/*
var_dump("ハロー！");
問 : if文 を使用し、標準入力で点数を2つ入力したときに、 テストの合計点が 合格、追試、不合格 かを振り分けメッセージを出力してください。
【以下の条件で作成】

変数名 : $score_1
変数名 : $score_2
入力した点数2つがどちらも80点以上 だったら、 合格です。 と出力。
入力した点数のうち、どちらかが50点以上80点未満 だったら、追試です。 と出力。
入力した点数2つがどちらも50点未満 だったら、 不合格です。 と出力。
プログラムの実行はターミナルから行ってください。
root@**********:/var/www/furiPHP/furiPHP_exercise
[app] $ php chap2_3.php 
string(42) "数学の点数を入力してください"       80
string(42) "国語の点数を入力してください"       80
string(15) "合格です。"
string(15) "追試です。"
string(18) "不合格です。"
*/

var_dump("数学の点数を入力してください");
$score_1 = trim(fgets(STDIN)); // 数学
var_dump("国語の点数を入力してください");
$score_2 = trim(fgets(STDIN)); // 国語

if ($score_1 >= 80 && $score_2 >= 80) {
    var_dump("合格です。");
} elseif ($score_1 < 50 && $score_2 < 50) {
    var_dump("不合格です。");
} else {
    var_dump("追試です。");
}

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap2_3.php

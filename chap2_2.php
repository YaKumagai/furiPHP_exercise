<?php
/*
var_dump("ハロー！");
課題2 : 条件分岐を使って偶数奇数を判定しよう。
問 : 標準入力で数字を入力した時、入力された数字が 奇数 か 偶数 か判定して出力してください。
【以下の条件で作成】
変数名 : $num
変数num が 偶数 だったら、[入力した整数] は 偶数です と出力。
変数num が 奇数 だったら、[入力した整数] は 奇数ですと出力。
プログラムの実行はターミナルから行ってください。
root@**********:/var/www/furiPHP/furiPHP_exercise
[app] $ php chap2_2.php 
string(30) "数字を入力して下さい"       4
string(18) "4 は 偶数です"

root@**********:/var/www/furiPHP/furiPHP_exercise
[app] $ php chap2_2.php 
string(30) "数字を入力して下さい"       7
string(18) "7 は 奇数です"
*/
// $year = filter_input(INPUT_GET, "year", FILTER_VALIDATE_INT);

var_dump("数字を入力して下さい");
$num = trim(fgets(STDIN));
$nums = $num % 2;
if($nums === 1){
    var_dump($num . " は、奇数です");
}else{
    var_dump($num . " は、偶数です");
}

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap2_1.php
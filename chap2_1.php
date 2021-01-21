<?php
/*
var_dump("ハロー！");
課題1 : 条件分岐を使って年齢の振り分けをしよう。
問 : if文 を使用し、標準入力で入力した年齢により、メッセージを振り分けて出力してください。
【以下の条件で作成】

変数名 : $age
変数age が 20未満 だった場合、あなたは未成年です と出力。
変数age が 20ピッタリ だった場合、成人式ですね、おめでとう！ と出力。
変数age が 20より大きい 場合、 成人です と出力。
この時、条件分岐の順番は問いません。
実行結果 と同じように出力してください。

プログラムの実行はターミナルから行ってください。

root@**********:/var/www/furiPHP/furiPHP_exercise
[app] $ php chap2_1.php
string(12) "年齢は？"
19
string(27) "あなたは未成年です"

root@**********:/var/www/furiPHP/furiPHP_exercise
[app] $ php chap2_1.php
string(12) "年齢は？"
20
string(39) "成人式ですね、おめでとう！"

root@**********:/var/www/furiPHP/furiPHP_exercise
[app] $ php chap2_1.php
string(12) "年齢は？"
21
string(12) "成人です"

*/

var_dump("年齢は？");
$age = trim(fgets(STDIN));
if($age < 20){
    var_dump("年齢は".$age."歳で、");
    var_dump("あなたは未成年です。");
}elseif($age === 20){
    var_dump("年齢は".$age."歳で、");
    var_dump("成人式ですね、おめでとう！");
}elseif($age > 20){
    var_dump("年齢は".$age."歳で、");
    var_dump("成人です");
}

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap2_1.php
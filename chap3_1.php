<?php
/*
var_dump("ハロー！");
問 : foreach を使用し、 血液型の配列データを出力してください。
【以下の条件で作成】
変数名 : $blood_types
配列 A、B、O、AB
実行結果 と同じように出力してください。
プログラムの実行はターミナルから行ってください。
*/
$blood_types = ["A", "B", "O", "AB"];
foreach ($blood_types as $blood_type) {
    var_dump($blood_type . "型です。");
}

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap3_1.php

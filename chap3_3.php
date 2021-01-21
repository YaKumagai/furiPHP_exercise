<?php
/*
var_dump("ハロー！");
問 : if文 と foreach を使用し、以下の条件で 100まで繰り返してください。
【以下の条件で作成】
【条件 1】 3 の倍数の時には Fizz と出力。
【条件 2】 5 の倍数の時には Buzz と出力。
【条件 3】 3 の倍数かつ 5 の倍数の時は FizzBuzz と出力。
実行結果 と同じように出力してください。
プログラムの実行はターミナルから行ってください。

*/
foreach(range(0,99) as $cnt){
    $aaa = $cnt+1;
    if($aaa%3 === 0 && $aaa%5 === 0){
        echo "FizzBuzz ";
    }else{
        if($aaa%3 === 0){
            echo "Fizz ";
        }elseif($aaa%5 === 0){
            echo "Buzz ";
        }else{
            echo $aaa." ";
        }
    }
}

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap3_3.php


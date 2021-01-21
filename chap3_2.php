<?php
/*
問 : if文 と foreach を使用し、100まで繰り返し数えてください。この時 3の倍数 のときは アホ と出力してください。
【以下の条件で作成】

数値1~数値100 の範囲の配列の要素を1つずつ変数$int に入れる間、以下を繰り返し実行。
3の倍数 のときは アホ と出力。
実行結果 と同じように出力してください。

プログラムの実行はターミナルから行ってください。
*/
foreach(range(0,99) as $cnt){
    $aaa = $cnt+1;
    // var_dump($aaa."回目のハロー！");
    if($aaa%3 === 0){
        echo "アホ ";
    }else{
        echo $aaa." ";
    }
}

// docker-compose exec app bash
// cd furiPHP_exercise
// php chap3_2.php

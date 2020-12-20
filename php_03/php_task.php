<?php
$name = "翔太";

if ($name == "翔太"){
    echo "私は あなたの名前 です";
}else{
    echo "あなたの名前ではありません";
}

// for($i=0;$i<1000;$i++){
//     echo $i;
// }

$fruits=array("りんご","バナナ","ぶどう","桃","梨");
foreach($fruits as $fruit){
    echo $fruit;
}

/* for文の始めの値を定義する /
/* for文の終わりの値を定義する */
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

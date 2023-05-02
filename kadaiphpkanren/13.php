<?php

$name = "fujimoto"; // 
echo "私は" . $name . "です\n";
if ($name == "fujimoto") { 
  echo "私はあなたの名前です\n";
} else {
  echo "あなたの名前ではありません\n";
}

$sum = 0;
for ($i = 1; $i <= 10000; $i++) {
  $sum += $i;
}
echo "1から10000までの合計は{$sum}です。";

$fruits = array("リンゴ", "バナナ", "ブドウ", "パイナップル", "メロン"); 

foreach ($fruits as $fruit) {
  echo $fruit . "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}
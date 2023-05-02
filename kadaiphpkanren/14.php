<?php
function double($num) {
  return $num * 2;
}

//引数に10を指定して実行
$result = double(10);
echo $result; //20が表示される


//2
function add($a, $b) {
  return $a + $b;
}

//引数に3と4を指定して実行
$result = add(3, 4);
echo $result; // 7が表示される

//3
function multiply_array($arr) {
  $result = 1;
  foreach ($arr as $value) {
    $result *= $value;
  }
  return $result;
}
$result = multiply_array(array(1, 3, 5, 7, 9));
echo $result; 

//4
function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr=[1, 2, 3, 4, 5];
  foreach($arr as $a){
    // ここで配列の1番大きい値を探したい
    if ($a > $max_number) {
      $max_number = $a;
    }
  }

  return $max_number;
}

//5
//strip_tagsは指定した文字列 (string) から全ての NULL バイトと HTML および PHP タグを取り除きます
$str = "<p>Hello, <strong>World!</strong></p>";
$clean_str = strip_tags($str);
echo $clean_str;

//array_pushは配列の末尾に要素を追加するための関数です
$fruits = array("apple", "banana");
array_push($fruits, "lemon", "tomato");

print_r($fruits);

//array_mergeは複数の配列を1つの配列にまとめるために使用されます
$array1 = array('ringo', 'nasubi');
$array2 = array('orange', 'grape');
$merged_array = array_merge($array1, $array2);
print_r($merged_array);

//timeは現在の Unix タイムスタンプを返す関数です
$current_timestamp = time();
echo $current_timestamp;

//mktime関数は指定した日時の Unix タイムスタンプを返す関数です
$timestamp = mktime(0, 0, 0, 4, 20, 2023);
echo $timestamp;

//date関数は指定された日時を任意の形式でフォーマットし、日付文字列を返す関数です
// 現在日付をフォーマットする
echo date('Y/m/d');
echo '<br>';
 
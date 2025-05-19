<?php

require_once('function.php');




//data読み込み
$fp = fopen("bookdata.csv", "r");

//fileを開いてあるか確認
if($fp== false){
    echo "ファイルのオープンに失敗しました";
    exit;
}
// var_dump($fp);

// $row = fgetcsv($fp);
// var_dump($row);

while($row = fgetcsv($fp)){
  echo '<ul>';
  echo '<li>' . "Book:" . str2html($row[0], ENT_QUOTES, 'UTF-8') . '</li>';
  echo '<li>' . "name:"  . str2html($row[4], ENT_QUOTES, 'UTF-8') . '</li>';
  echo '</ul>';
}
?>

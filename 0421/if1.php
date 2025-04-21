<?php
$condition = true;
if ($condition) {
  echo '条件はtrueです。';
}
?>
<br>
<?php
$a = 1;
var_dump($a);
if($a==1){
    echo"a is 1.";
}
?>
<br>
<?php
$a = 1;
$b ="1";
if($a === 1){
  echo "aは数値型です。";
}
if($b === "1"){
  echo "bは文字列型です。";
}
if($a == $b){
  echo "aとbは等しい値です。";
}


echo "<br>";
if($a === $b){
  echo "aとbは型も値も等しい値です。";
}else{
  echo "aとbは型が等しくありません。";
}



echo "<br>";
$c = 3;
if($c === 1){
  echo "cは1です。";
}elseif($c === 2){
  echo "cは2です。";
}else{
  echo "cは1でも2でもありません。";
}


echo "<br>";
$d = 4;
if($d > 1){
  echo "dは1より大きい値です。";
}elseif($d > 2){
  echo "dは2より大きい値です。";
}

echo "<br>";

if($d > 1){
  echo "dは1より大きい値です。";
}
if($d > 2){
  echo "dは2より大きい値です。";
}

echo "<br>";
$e = true;
#(boolean)

if($e === true){
  echo "eはtrueです。";
}

if($e !== false){
  echo "eはtrueです。";
}
#with ! mark it says the oppesite value
?>

<!--
// $Str = "101-0051 東京部分千代田区神田神保町1-1";
// preg_match("/(\d{3})-(\d{4})/", $Str, $matches);
// var_dump($matches); -->
<?php
// Example 1: Match exactly 7 digits
$str1 = "11234567";
$rtn1 = preg_match("/\A\d{7}\z/u", $str1, $match1);

// Example 2: Match exactly 7 digits (will fail because it's only 6 digits)
$str2 = "123456";
$rtn2 = preg_match("/\A\d{7}\z/u", $str2, $match2);

// Example 3: Match postal code format (e.g., 111-1234)
$str3 = "111-1234 あ";
$rtn3 = preg_match("/\A\d{3}-\d{4}\z/u", $str3, $match3);

// Output results
echo "結果1";
var_dump($match1);

echo "結果2";
var_dump($match2);

echo "結果3";
var_dump($match3);
?>
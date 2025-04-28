<?php
// Uncommented the first loop for clarity
// for ($i = 1; $i < 100; $i++) {
//     echo $i . "<br>";
// }

for ($i = 1; $i <= 100; $i++) {
    echo $i * 2 . "<br>";
}

$a = 5;
echo "5とんります: " . $a++ . "<br>";
echo '現在の$aは ' . $a . " です。<br>";


$b = 5;
echo "5とんります: " . ++$b . "<br>";
echo '現在の$aは ' . $b . " です。<br>";


for ($i = 0; $i <= 9; $i++) {
    echo $i*5  . "<br>";
}
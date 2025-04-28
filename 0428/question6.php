<?php
$color = [
    0 => '赤',
    1 => '青',
    2 => '緑'
];
foreach ($color as $key => $value) {
    echo "$value<br>";
}
?>

<?php
$fruits=[
    'apple' => '150円',
    'banana' => '120円',
    'orange' => '100円',
];
foreach($fruits as $key => $value) {
    echo " $key $value.<br>";
}
?>
<?php
$total = [100, 200, 300];
foreach ($total as $value) {

}
$total = array_sum($total);
echo "$total";
"<br>";
?>


<?php

$lan=[
    'PHP',
    'JavaScript',
    'Python'
];
foreach($lan as $key => $value) {
    echo "$key $value.<br>";
}
?>

<?php
$name = ['A', 'B', 'C'];
foreach ($name as $key => $value) {
    echo "$value さん<br>";
}
?>

<?php
$number = [10, 20, 30];
foreach($number as $value) {
   echo $value*2 . "<br>";
}

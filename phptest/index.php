<?php
$a = 5;
$b = 3;
$a = $a + $b;
echo $a;
?>
<br>


<?php
$name = "Sheran";
$name .= "さん、元気？";
echo $name;
?>
<br>

<?php
$total = 1000;
$total = $total + ($total * 10 / 100);
echo $total;
?>
<br>


<?php
$score = rand(0, 100);
echo $score;
?>
<br>



<?php
if ($score > 80) {
       echo "優";
} elseif ($score > 60) {
       echo "良";
} else {
       echo "可";
}
?>
<br>


<?php

for ($i = 1; $i <= 100; $i++) {
       if ($i % 3 === 0) {
              echo $i . "<br>";
       }
}
?>
<br>


<?php
$person = ['name' => 'Taro', 'age' => 20];
foreach ($person as $key => $value) {
       echo $key . ":" . $value . "<br>";
}
?>
<br>



<?php
$users = [
       ['name' => 'Ken', 'age' => 20, 'score' => 85],
       ['name' => 'Yui', 'age' => 22, 'score' => 78],
       ['name' => 'Taro', 'age' => 19, 'score' => 55]
];

foreach ($users as $user) {
       echo "Name: " . $user['name'] . ", Age: " . $user['age'] . ", Score: " . $user['score'] . ", Judgment: ";
       if ($user['score'] >= 80) {
              echo "優";
       } elseif ($user['score'] >= 60) {
              echo "良";
       } else {
              echo "可";
       }

       echo "<br>";
}
?>

<br>


<?php
if ($score > 80): ?>優
<?php elseif ($score > 60): ?>良
<?php else: ?>可
<?php endif; ?>
<br>



<?php

require_once './function.php';
greet();
?>

<br>



<?php
echo $_POST . ["name"] . "のコメント".":". $_POST.["comment"] . "<br>";
?>

<br>




?>
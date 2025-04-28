<?php
$people[] = ['name' => 'John', 'blood' => 'A'];
$people[] = ['name' => 'Jane', 'blood' => 'B'];
$people[] = ['name' => 'Tom', 'blood' => 'O'];

var_dump($people);

echo $people[0]['blood'] . "<br>";
echo $people[1]['name'] . "<br>";
echo $people[2]['blood'] . "<br>";

foreach ($people as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo 'キーは ' . $key2 . ' 値は ' . $value2 . "<br>";
    }
}

foreach ($people as $people_key => $value) {
    echo 'キーは ' . $people_key . "<br>";
    foreach ($value as $person_key2 => $value2) {
        echo 'キーは ' . $person_key2 . ' 値は ' . $value2 . "<br>";
    }
}

// ２次元配列を作ってください。
$people2 = [
    ['name' => 'John', 'blood' => 'A'],
    ['name' => 'Jane', 'blood' => 'B'],
    ['name' => 'Tom', 'blood' => 'O']
];
foreach ($people2 as $preson) {
    foreach ($preson as $value2) {
        echo $value2 . "<br>";
    }
}
?>
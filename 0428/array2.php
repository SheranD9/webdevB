<?php

$name=[
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];



foreach($name as $value) {
    echo " $value";
}

foreach($name as $key => $value) {
    echo "'キーは'.$key.'name' .$value.<br>";
}

var_dump($name);
echo $name['city']


?>
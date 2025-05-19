<?php
$players = [
    ["rank" => 1, "name" => "山本",     "team" => "ドジャース", "era" => 1.80],
    ["rank" => 2, "name" => "ルサルド", "team" => "フィリーズ", "era" => 2.11],
    ["rank" => 3, "name" => "ペラルタ", "team" => "ブリュワーズ", "era" => 2.18],
    ["rank" => 4, "name" => "キング",   "team" => "パドレス",   "era" => 2.22],
    ["rank" => 5, "name" => "キャニング", "team" => "メッツ",     "era" => 2.357],
];



foreach ($players as $player) {
    echo  $player['name']."/n";

 }

//player column is an another array that suits inside the players array

foreach ($players as $player) {
    echo ($player['era'] >2.2);
    echo $player['name']."/";
}

//create a new 2d array using different name age team

$players2 = [
    [
        "age" => 5, "name" => "山本",     "team" => "ドジャース",
    ],
    [
        "age" => 6, "name" => "ルサルド", "team" => "フィリーズ",
     ],
    [
        "age" => 7, "name" => "ペラルタ", "team" => "ブリュワーズ",
     ],
    [
        "age" => 8, "name" => "キング",   "team" => "パドレス",
     ],
    [
        "age" => 9, "name" => "キャニング", "team" => "メッツ",
     ],
];

foreach ($players2 as $player) {
    echo  $player['age']."/n";
 }


 foreach ($players2 as $player) {
    foreach ($player as $key => $value) {
        if ($key == "name") {
            echo $value . "<br>";
        }
    }
}



//配列(array)だったらforech




?>

<?php

if (!isset($_GET['zip'])) {
    echo "zip を設定してください。";
    exit;
}


# api2.php
$rtn = preg_match("/\A\d{7}\z/u", $_GET['zip']);
if (!$rtn) {
    echo "郵便番号は7個で入力してください。";
    exit;
}
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . $_GET['zip'];
$response = file_get_contents($url);
$response = json_decode($response, true);
var_dump($response);
echo "入力された郵便番号: ";
echo $response['results'][0]['address1'] ;
echo $response['results'][0]['address2'] ;
echo $response['results'][0]['address3'] ;
echo "の郵便番号です。";

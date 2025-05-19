<?php
require_once 'data.php';
var_dump($people);

foreach($people as $key => $value){
  echo $key  . $value['name'] . 'さんです。' . PHP_EOL;

}
<?php
function test($b){
       $a=10;
       return $a + $b;
       //locafunctions are always wraped by {}
}
$a = test(2);


echo $a;

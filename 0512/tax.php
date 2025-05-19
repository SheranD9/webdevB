<?php
// 価格をパラメータににゅろくしたらtaxを表示する。

function tax ($price){
    echo $price * 1.1;
}
tax(100);



function tax2 ($price){
    return $price * 1.1;
}

tax2(100);

tax2(100);
$sample_price = tax2(100);
echo '消費税込みの値段：' . $sample_price . '円';





function tax3 (int $price){
    return $price * 1.1;
}

tax3 (100);

tax3 (100);
$sample_price = tax3 ('文字列');
echo '消費税込みの値段：' . $sample_price . '円';

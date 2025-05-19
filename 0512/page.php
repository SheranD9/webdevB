<!-- include使用 -->
<?php
include("menu.php");
include("menu.php"); // 2回目も実行される
?>

<!-- include_once使用 -->
<?php

include_once("menu.php"); // 2回目は無視される
?>
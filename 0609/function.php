<?php
function str2html(string $string): string
{
 return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
// 関数を実行
// 関数を（）で実行
function db_open(){
       $user = 'phpuser';
       $password = '2001Ds@06$20'; // 任意のパスワード
       $opt = [
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       PDO::ATTR_EMULATE_PREPARES => false,
       PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
       ];

       try {
       $dbh = new PDO('mysql:host=localhost;dbname=sample_db;charset=utf8', $user, $password, $opt);
       return $dbh;
       } catch (PDOException $e) {
       echo 'Connection failed: ' . $e->getMessage();
       exit;
       }
}
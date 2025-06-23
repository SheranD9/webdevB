<?php
require_once './function.php';


if (empty($_POST['id'])) {
       echo "idが入力されていません。<br>";
       exit;
}

if (!preg_match('/\A\d{1,11}+\z/u', $_POST['id'])) {
       echo 'idをただしくありません';
       exit;
}


if (empty($_POST['title'])) {
       echo "タイトルが入力されていません。<br>";
       exit;
}


if (!preg_match('/\A[[:^cntrl:]]{1,200}\z/u', $_POST['title'])) {
       echo 'タイトルは200文字以内で入力してください。';
       exit;
}

if (!preg_match('/\A\d{0,13}\z/', $_POST['isbn'])) {
       echo 'ISBNは数字13桁以内で入力してください。';
       exit;
}

if (!preg_match('/\A\d{0,6}\z/u', $_POST['price'])) {
       echo '価格を6桁以内で入力してください。';
       exit;
}

       if (empty($_POST['publish'])) {
       echo "日付は必須です。<br>";
       exit;
}

if (!preg_match('/\A[[:^cntrl:]]{0,80}\z/u', $_POST['author'])) {
       echo '著者名は80文字以内で入力してください。';
       exit;
}

try {
       $dbh = db_open();
       $sql = 'UPDATE books SET title = :title, isbn = :isbn, price = :price, publish = :publish, author = :author WHERE id = :id';
       $stmt = $dbh->prepare($sql);
       $id = (int)$_POST['id'];
       $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
       $stmt->bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
       $stmt->bindParam(':price', $_POST['price'], PDO::PARAM_INT);
       $stmt->bindParam(':publish', $_POST['publish'], PDO::PARAM_STR);
       $stmt->bindParam(':author', $_POST['author'], PDO::PARAM_STR);
       $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
       $stmt->execute();
       echo 'データが更新されました。';
       echo '<a href="list.php">リストへ戻る</a>';
} catch (PDOException $e) {
       echo 'エラー！: ' . str2html($e->getMessage()) . '<br>';
       exit;
}

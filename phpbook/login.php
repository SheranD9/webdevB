<?php
session_start();
require_once __DIR__ . '/inc/function.php';
include __DIR__ . '/inc/header.php';

?>


<form action="./login.php" method="post">
          <p>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
          </p>
          <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
          </p>
          <button type="submit">login</button>
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          if (empty($_POST['username']) || empty($_POST['password'])) {
                    echo "enter the username and password";
                    include __DIR__ . '/inc/footer.php';
                    exit;
          }

          try {
                    echo "とんだ";
                    $dbh = db_open();
                    $sql = "SELECT password FROM users WHERE username = :username";
                    $stmt = $dbh->prepare($sql);
                    $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);


                    if (!$result) {
                              echo "no data";
                              exit;
                    }

                    if (password_verify($_POST['password'], $result['password'])) {
                              session_regenerate_id(true);
                              $_SESSION['login'] = true;
                              header("Location: index.php");
                    } else {
                              echo 'login failed';
                    }
          } catch (Exception $e) {
                    echo "Error: " . str2html($e->getMessage());
                    exit;
          }
}

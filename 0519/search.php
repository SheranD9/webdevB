<?php
$search = $_POST['search'];


if (($fp = fopen("songs.csv", "r")) === false) {
    echo "ファイルのオープンに失敗しました";
    exit;
}


while ($row = fgetcsv($fp)) {
    if ($search === '' || stripos($row[0], $search) !== false) {
        $found = true;
        echo '<ul>';
        echo '<li>title: ' . htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8') . '</li>';
        echo '<li>artist: ' . htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8') . '</li>';
        echo '<li>genre: ' . htmlspecialchars($row[2], ENT_QUOTES, 'UTF-8') . '</li>';
        echo '<li>year: ' . htmlspecialchars($row[3], ENT_QUOTES, 'UTF-8') . '</li>';
        echo '<li>comment: ' . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . '</li>';
        echo '</ul>';
    }
}

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <p>①次のif-elseif-else構文を代替構文にしてください。</p>
    <?php
    $num = 2; ?>
    <?php
    if ($num === 1): ?>
        一です
    <?php elseif ($num === 2): ?>
        二です
    <?php else: ?>
        それ以外です
    <?php endif; ?>
    <p>②以下のコードを代替構文に書き換えてください。</p>
    <?php
    $isMember = true; ?>
    <?php
    if ($isMember):
    ?>
        <p>会員様向けの情報です。</p>
    <?php
    endif;
    ?>

    <p>③HTMLのul要素の中で、for文を使ってli要素を5個出力するコードを代替構文で書いてください。<br>
        例：
        <?php
        "<ul>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
</ul>";
        ?>


        ④以下のfor文を代替構文に書き換えてください。</p>
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <p> <?= $i ?></p>
    <?php endfor; ?>


    <p>⑤HTMLの中で、foreachを使ってliリストを作る処理を代替構文で書いてください。<br>


        <?php
        $items = [1, 2, 3, 4, 5]; ?>
    <ul>
        <?php foreach ($items as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>


    <p>⑥以下のコードを代替構文に書き換えてください。</p>
    <?php
    $users = ['太郎', '花子', '次郎'];
    foreach ($users as $user) : ?>
        <p><?= $user ?>さん、ようこそ！</p>
    <?php endforeach; ?>

</body>

</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>課題011</title>
</head>
<body>
    <p>
        <?php
        $vegetables = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
        ?>
    </p>
    <p>
        <?php
    $user = ['id' => '1', '名前' => '侍太郎', '年齢' => '30'];

        foreach ($user as $key => $value) {
            echo "{$key}：{$value} <br>";
        }
        ?>
    </p>
    
</body>
</html>
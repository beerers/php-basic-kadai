<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題011</title>
</head>

<body>
  <p>
    <?php
    $vegetables = [
      '名前' => '玉ねぎ',
      '値段' => 200,
      '産地' => '北海道'
    ];

    foreach ($vegetables as $key => $value) {
      echo "{$key}：{$value}<br>";
    }
    ?>
  </p>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order)
    {
      if ($order) {
        sort($array);
        echo '昇順にソートします。<br>';
      } else {
        rsort($array);
        echo '降順二ソートします。<br>';
      }
      foreach ($array as $value) {
        echo $value . '<br>';
      }
    }

    $nums = [15, 4, 18, 23, 10];

    sort_2way($nums, true);
    sort_2way($nums, false);

    ?>
  </p>
</body>

</html>
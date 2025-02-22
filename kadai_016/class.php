<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎</title>
</head>

<body>
  <p>
    <?php
    // Foodクラス
    class Food
    {
      private $name;
      private $price;

      //メソッド定義
      public function set_price(int $price)
      {
        $this->price = $price;
      }

      //価格を表示するメソッド
      public function show_price()
      {
        echo $this->price . '<br>';
      }
      //コンストラクタ
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }
    // Animalクラス

    class Animal
    {
      private $name;
      private $height;
      private $weight;
      //メソッド定義
      public function set_height(int $height)
      {
        $this->height = $height;
      }

      //表示するメソッド
      public function show_height()
      {
        echo $this->height . '<br>';
      }
      // コンストラクタ
      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    //インスタンス化
    $food = new Food('potato', 250);

    //インスタンス$Foodの各プロパティを出力
    print_r($food);
    echo '<br>';
    //インスタンス化
    $animal = new Animal('dog', 60, 5000);

    //インスタンス$Foodの各プロパティを出力
    print_r($animal);
    echo '<br>';
    //メソッドにアクセスして実行
    $food->set_price(250);
    $food->show_price();
    $animal->set_height(60);
    $animal->show_height();
    ?>
  </p>
</body>

</html>
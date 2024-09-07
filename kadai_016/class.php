<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
<p>
  <?php
  class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }

    // ゲッターで price を取得
    public function getPrice() {
      return $this->price;
    }
  }

  // Food オブジェクトを作成
  $food = new Food('potato', 250);

  // オブジェクト全体を表示
  print_r($food);
  ?>
</p>

<p>
  <?php
  class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    // ゲッターで height を取得
    public function getHeight() {
      return $this->height;
    }
  }

  // Animal オブジェクトを作成
  $animal = new Animal('dog', 60, 5000);

  // オブジェクト全体を表示
  print_r($animal) ;

  echo '<br>';
  // Food オブジェクトの price を表示
  echo $food->getPrice() . '<br>';  

  // Animal オブジェクトの height を表示
  echo $animal->getHeight() . '<br>'; 
  ?>
</p>
</body>
</html>
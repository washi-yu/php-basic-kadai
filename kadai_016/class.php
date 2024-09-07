<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function show_price(){
      echo $this->price;
      }

      public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
      
      }


    }
    class Animal {
      private $name;
      private $height;
      private $wight;

      public function show_height(){
        echo $this->height;
      }


      public function __construct($name,$height,$wight){
        $this->name = $name;
        $this->height = $height;
        $this->wight = $wight;
      }

    }
    
    $food = new Food('potato',250);
    $animal = new Animal('dog',60,5000);
    print_r($food);
    echo '<br>';
    print_r($animal);
    echo '<br>';
    $food->show_price();
    echo '<br>';
    $animal->show_height()
      
    ?>
  </p>
</body>
</html>
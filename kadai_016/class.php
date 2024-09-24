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

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo $this->price;
              }

        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct(string $name,int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }


            public function show_height() {
                echo $this->height;
            }
        }

        $poteto = new Food('potato', 250);
        $dog = new Animal('dog', '60', '5000');

        print_r($poteto);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        $poteto->show_price();
        echo '<br>';

        $dog->show_height();

    ?>
    </p>
    <!-- <p>
    <?php
        #[AllowDynamicProperties]
        class foodPrice {
            public $foodPrice;

            public function set_name(string $foodPrice){
                $this->name = $foodPrice;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }

        }

        $foodPrice = new FoodPrice();
        $foodPrice->set_name('250');
        $foodPrice->show_name();

        #[AllowDynamicProperties]
        class AnimalHeight {
            public $animalHeight;

            public function set_name(string $animalHeight){
                $this->name = $animalHeight;
            }
            public function show_name() {
                echo $this->name . '<br>';
            }

        }

        $animalHeight = new AnimalHeight();
        $animalHeight->set_name('60');
        $animalHeight->show_name();

    ?>
    </p> -->
</body>
</html>
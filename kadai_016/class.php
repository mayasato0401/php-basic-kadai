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
            public $name;
            public $price;

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

        }

        $food = new food('potato', 250);

        print_r($food);
        echo '<br>';

        class Animal {
            public $name;
            public $heigth;
            public $weight;

            public function __construct(string $name, int $heigth, string $weight) {
                $this->name = $name;
                $this->heigth = $heigth;
                $this->weight =$weight;
            }


            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        $animal = new animal('dog', '60', '5000');

        print_r($animal);
        echo '<br>';
    ?>
    </p>
    <p>
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
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?
        class Animal{
            public $weight, $age, $color;

            function __construct($weight, $age, $color){
                $this->weight = $weight;
                $this->age = $age;
                $this->color = $color;
            }

            function displayInfo(){
                ?><p>Вес: <?echo $this->weight?></p>
                <p>Возраст: <?echo $this->age?></p>
                <p>Окрас: <?echo $this->color?></p><?
            }
        }

        class Lion extends Animal{
            public $gender;
            function __construct($weight, $age, $color, $gender){
                parent::__construct($weight, $age, $color);
                $this->gender = $gender;
            }
            function displayInfo(){
                parent::displayInfo();
                ?><p>Пол: <?echo $this->gender?></p><?
            }
        }

        class Rabbit extends Animal{
            public $height;

            function __construct($weight, $age, $color, $height){
                parent::__construct($weight, $age, $color);
                $this->height = $height;
            }

            function displayInfo(){
                parent::displayInfo();
                ?><p>Рост: <?echo $this->height?></p><?
            }
        }

        class Wolf extends Animal{
            public $staya;

            function __construct($weight, $age, $color, $staya){
                parent::__construct($weight, $age, $color);
                $this->staya = $staya;
            }

            function displayInfo(){
                parent::displayInfo();
                ?><p>Количество в стае: <?echo $this->staya?></p><?
            }
        }

        ?><h1>Животное</h1><?
        $pers = new Animal("63кг", "3г", "черный");
        $pers -> displayInfo();
        echo '<br>';

        ?><h1>Лев</h1><?
        $lev = new Lion("300кг", "4г", "оранжевый", "мужской");
        $lev -> displayInfo();
        echo '<br>';

        ?><h1>Заяц</h1><?
        $zayaz = new Rabbit("5кг", "2г", "серый", "50см");
        $zayaz -> displayInfo();
        echo '<br>';

        ?><h1>Волк</h1><?
        $wolk = new Wolf("90кг", "6л", "серый", "8 волков");
        $wolk -> displayInfo();
        echo '<br>';


    ?>
</body>
</html>
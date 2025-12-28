<?php

//$user = [
//        "name" => "Шовхал",
//        "age" => 25,
//        "city" => "Евлах",
//        "pogonyalo" => "Вентилятор",
//        'test' => 'test2'
//];
//
//// [name, age, city, pogonyalo, test];
//$lomgede = array_keys($user);
//
//// 1 цыкл $key = name
//// 2 цыкл $key = age
//// 3 цыкл $key = city
//// 4 цыкл $key = pogonyalo
//// 5 цыкл $key = test
//foreach ($user as $key => $value) {
//    if (in_array($key, $lomgede)) {
//        echo $key . ": " . $user[$key] . "<br>";
//    }
//}


//$a = [1, 2, 3];
//$b = [4, 5, 6];
//$c = [7, 8, 9, 10];
//
//$result = [
//    array_sum($a) / count($a),
//    array_sum($b) / count($b),
//    array_sum($c) / count($c),
//];
//
//print_r($result);

//$teams = [
//    [
//        'team' => 'Barcelona',
//        'players' => [
//            ['first_name' => 'Lionel', 'last_name' => 'Messi'],
//            ['first_name' => 'Xavi', 'last_name' => 'Hernandez'],
//            ['first_name' => 'Andres', 'last_name' => 'Iniesta'],
//            ['first_name' => 'Gerard', 'last_name' => 'Pique'],
//            ['first_name' => 'Sergio', 'last_name' => 'Busquets'],
//        ],
//    ],
//    [
//        'team' => 'Real Madrid',
//        'players' => [
//            ['first_name' => 'Cristiano', 'last_name' => 'Ronaldo'],
//            ['first_name' => 'Luka', 'last_name' => 'Modric'],
//            ['first_name' => 'Toni', 'last_name' => 'Kroos'],
//            ['first_name' => 'Sergio', 'last_name' => 'Ramos'],
//            ['first_name' => 'Karim', 'last_name' => 'Benzema'],
//        ],
//    ],
//    [
//        'team' => 'Manchester United',
//        'players' => [
//            ['first_name' => 'Wayne', 'last_name' => 'Rooney'],
//            ['first_name' => 'Paul', 'last_name' => 'Scholes'],
//            ['first_name' => 'Ryan', 'last_name' => 'Giggs'],
//            ['first_name' => 'David', 'last_name' => 'Beckham'],
//            ['first_name' => 'Rio', 'last_name' => 'Ferdinand'],
//        ],
//    ],
//    [
//        'team' => 'Bayern Munich',
//        'players' => [
//            ['first_name' => 'Thomas', 'last_name' => 'Muller'],
//            ['first_name' => 'Manuel', 'last_name' => 'Neuer'],
//            ['first_name' => 'Joshua', 'last_name' => 'Kimmich'],
//            ['first_name' => 'Philipp', 'last_name' => 'Lahm'],
//            ['first_name' => 'Arjen', 'last_name' => 'Robben'],
//        ],
//    ],
//    [
//        'team' => 'Juventus',
//        'players' => [
//            ['first_name' => 'Alessandro', 'last_name' => 'Del Piero'],
//            ['first_name' => 'Gianluigi', 'last_name' => 'Buffon'],
//            ['first_name' => 'Andrea', 'last_name' => 'Pirlo'],
//            ['first_name' => 'Paulo', 'last_name' => 'Dybala'],
//            ['first_name' => 'Claudio', 'last_name' => 'Marchisio'],
//        ],
//    ],
//]; // Собрать новый массив где сделаем канкатенацию с фамилией и именем играков ,
// в результате далжны полуить такой же
// массив только не будет в массиве first_name и last_name , будет только full_name


//$cars = [
//    'BWM' => [
//        'color' => 'black',
//        'max_speed' => 320
//    ],
//    'BYD' => [
//        'color' => 'green',
//        'max_speed' => 496
//    ],
//    'Mercedes' => [
//        'color' => 'red',
//        'max_speed' => 240
//    ],
//    'Kia' => [
//        'color' => 'blue',
//        'max_speed' => 270
//    ],
//    'Hyundai' => [
//        'color' => 'white',
//        'max_speed' => 280
//    ]
//];  // Перебрать все машины и сумировать общую сумму скорости
// в переменну а также вывести в отдельной переменную среднее значение скорости
// всех машин а также добавитьк каждой
// машине какой марки и собрать отдельный массив с цветами машины

// Также разобраться с тем что делали сегодня на уроке файл называется 27-12-2025

// 1606
//$totalSpeed = 0;
//// 5
//$countCars = count($cars);
//$colors = [];
//
//foreach ($cars as $key => $car) {
//    $totalSpeed += $car['max_speed'];
//    $colors[$key] = $car['color'];
//
//    if ($key == 'BWM') {
//        $cars['BWM']['model'] = 'X5';
//    }elseif ($key == 'BYD') {
//        $cars['BYD']['model'] = 'Destroyer 05';
//    }elseif ($key == 'Mercedes') {
//        $cars['Mercedes']['model'] = 'E320';
//    }elseif ($key == 'Kia') {
//        $cars['Kia']['model'] = 'K5';
//    }else{
//        $cars['Hyundai']['model'] = 'Santa fe';
//    }
//}
//$avgSpeed = $totalSpeed / $countCars;

//print_r($colors);


//$text = 'Денниярдо Салам алейкум';
//$textExploded = explode(" ", $text);
//$result = [];
//
//foreach ($textExploded as $key => $text) {
//    $arrayBukv = mb_str_split($text);
//
//    for ($i = count($arrayBukv) - 1; $i >= 0; $i--) {
//        $result[$key][] = $arrayBukv[$i];
//    }
//    $result[$key] = implode('', $result[$key]);
//}
//
//$result = implode(" ", $result);
//
//print_r($result . PHP_EOL);



class Cat
{
    public $lifes = 9;
    public $reaction = null;
    private $color = 'black';

    public function catReaction(string $text)
    {
        if($text == 'Hi'){
            return 'Gitler';
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

$cat = new Cat();

print_r($cat->getColor() . PHP_EOL);
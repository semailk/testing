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


$array = [
    'a' => ['b' => ['c' => [1, 2, 3]]],
    'e' => ['z' => ['t' => [4, 5, 6]]],
    1 => ['qwe' => ['tb' => [41, 35, 556, 99, 111 , 33, 123, 555 , 11, 55]]],
];

function getNumbers(array $numbersArray, string $searchKey)
{
    foreach ($numbersArray as $number) {
        foreach ($number as $value) {
            foreach ($value as $key => $v) {
                if($key == $searchKey){
                    foreach ($v as $keyName => $denniDumay) {
                        echo $keyName . '<br>';
                    }
                }
            }
        }
    }
}

getNumbers($array, 'c');
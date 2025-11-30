<?php

class Car
{
    public int $speed = 90;
    public string $color = 'Black';
    public string $brand = 'BMW';

    public function isStock()
    {
        return true;
    }

    public function hasCarNumber($number)
    {
        $hasArray = [
            331, 555, 777, 111
        ];

        $dontHasArray = [
            123, 444, 882
        ];

        if (in_array($number, $hasArray)) {
            return true;
        } elseif (in_array($number, $dontHasArray)) {
            return 'Пока нету в наличии';
        }

        return null;
    }
}

$car = new Car();


$a = (string)555; // Числовое
$b = (string)555.55; // Float

$c = 'Текст'; // Текст
$e = false; // Boolean True или False
$z = null; // Nullable пустое значение
$o = new Car(); // Object объект

$people = [
    [
        'first_name' => 'Вася',
        'last_name' => 'Пупкин',
        'father_name' => 'Шовхалович',
        'husbent' => true,
        'age' => 30,
        'document' => [
            'fin' => '3CCB9D1',
            'serial' => 'AA0918866',
            'date' => '09.08.2024'
        ]
    ],
    [
        'first_name' => 'Марина',
        'last_name' => 'Котова',
        'father_name' => 'Сергеевна',
        'husbent' => false,
        'age' => 27,
        'document' => [
            'fin' => '8FRX5E2',
            'serial' => 'BA1120457',
            'date' => '14.03.2023'
        ]
    ],
    [
        'first_name' => 'Игорь',
        'last_name' => 'Смирнов',
        'father_name' => 'Александрович',
        'husbent' => true,
        'age' => 45,
        'document' => [
            'fin' => '4GHT2W9',
            'serial' => 'AZ7459201',
            'date' => '01.12.2020'
        ]
    ],
    [
        'first_name' => 'Алина',
        'last_name' => 'Мамедова',
        'father_name' => 'Рустамовна',
        'husbent' => false,
        'age' => 34,
        'document' => [
            'fin' => '2HCB7E4',
            'serial' => 'AC0081633',
            'date' => '21.05.2022'
        ]
    ],
    [
        'first_name' => 'Тимур',
        'last_name' => 'Гасанов',
        'father_name' => 'Исрафилович',
        'husbent' => true,
        'age' => 29,
        'document' => [
            'fin' => '5BCY3L8',
            'serial' => 'AA6674932',
            'date' => '09.01.2024'
        ]
    ],
    [
        'first_name' => 'Светлана',
        'last_name' => 'Бондарь',
        'father_name' => 'Константиновна',
        'husbent' => false,
        'age' => 32,
        'document' => [
            'fin' => '7SDP4M1',
            'serial' => 'BK3187299',
            'date' => '18.06.2021'
        ]
    ],
    [
        'first_name' => 'Расим',
        'last_name' => 'Алиев',
        'father_name' => 'Эльчинович',
        'husbent' => true,
        'age' => 52,
        'document' => [
            'fin' => '9SDE1T4',
            'serial' => 'AB5519236',
            'date' => '30.11.2019'
        ]
    ],
    [
        'first_name' => 'Камила',
        'last_name' => 'Гулиева',
        'father_name' => 'Анаровна',
        'husbent' => false,
        'age' => 24,
        'document' => [
            'fin' => '1PLM6K9',
            'serial' => 'BE8713340',
            'date' => '02.02.2024'
        ]
    ],
    [
        'first_name' => 'Денис',
        'last_name' => 'Кузнецов',
        'father_name' => 'Владимирович',
        'husbent' => true,
        'age' => 38,
        'document' => [
            'fin' => '6KDW3W5',
            'serial' => 'AM0037421',
            'date' => '12.10.2022'
        ]
    ],
    [
        'first_name' => 'Екатерина',
        'last_name' => 'Романова',
        'father_name' => 'Петровна',
        'husbent' => false,
        'age' => 41,
        'document' => [
            'fin' => '9YTQ2E8',
            'serial' => 'AA9042216',
            'date' => '27.07.2024'
        ]
    ]
];

$citiesArray = [
    'Москва', 'Симферополь', 'Баку'
];

$namesArray = [
    'Raf', 'Denni', 'Alik'
];

$result = [];
//foreach ($citiesArray as $key => $city) {
//    foreach ($namesArray as $index => $name) {
//        if($name == 'Alik' && $city == 'Баку'){
//            $result[] = $name . ' ' . $city;
//        }elseif ($name == 'Denni' && $city == 'Симферополь'){
//            $result[] = $name . ' ' . $city;
//        }elseif ($name == 'Raf' && $city == 'Москва'){
//            $result[] = $name . ' ' . $city;
//        }
//    }
//}

// $result = 0 элементов 2-ой
// цыкл 1 элемент число 33
// цыкл 2 элемент число 33, 11, 44, 13, 66, 99
// (в сумме не будет 50 элементов цыкл не остановиться) И они все будут разные из-за задоного условия
$result = [];
for ($i = 1; count($result) < 50; $i++) {
    $randomInt = rand(1, 100);
    // 1-ый цыкл генирация числа 33
    // 2-ой цыкл генирация числа 11
    // 3-ий цыкл генирация числа 33
    // 4-ый цыкл генирация числа 77
    // 5-ый цыкл генирация числа 11
    if (!in_array($randomInt, $result)) {
        $result[] = $randomInt;
    }
}

rsort($result, SORT_NUMERIC);
//$result = array_values(array_unique($result));
//sort($result, SORT_NUMERIC);

echo '<pre>';
print_r($result);
echo '</pre>';
//foreach ($namesArray as $name) {
//    $result[] = $name;
//}
echo '<pre>';
//print_r(array_merge($namesArray, $citiesArray));
//print_r($result);
echo '</pre>';


foreach ($people as $key => $person) {
    //Дата выдачи документа нашего сотрудника
    $personDocumentDate = strtotime($person['document']['date']);
    //Дата с какого выдачи документа года сотрудник имеет право пользоваться сервисом
    $fromDate = strtotime('01.01.2024');

    //Условие где говориться сравнить дату выдачи и дату с какого периода
    if ($personDocumentDate > $fromDate) {
        // Сюда попадает документ который прошел проверку.То есть дота которая больше 01.01.2024
//        echo '<pre>';
//            print_r(conFio($person['first_name'], $person['last_name'], $person['father_name']) . '  DOCUMENT DATE:' . $person['document']['date']);
//        echo '</pre>';
    } else {
        // Сюда попадает все документы сотрудников которые не прошли проверку и подлежать удалению с массива
        // В Переменной $key содержиться ключ массива то есть у Денниса
        // например дата 12.10.2022 и он подлежит удалению из массива результата
        // И следовательно его ключ для удаленния из массива $key = 8
        // $people содержит 10 сотрудников и следовательно индексы массивов от 0 до 9,
        // и unset удалит элемент который находиться на уровне 8
        unset($people[$key]);
    }
}


//$avgAge = $sumAge / count($people);


echo '<pre>';
//print_r(array_sum(array_column($people, 'ahe')));
echo '</pre>';
//print_r($people[$i]['age']);

function conFio(
    string $firstName,
    string $lastName,
    string $fatherName
): string
{
    return $lastName . ' ' . $firstName . ' ' . $fatherName;
}



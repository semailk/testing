<?php

$names = [
    'Алик',
    'Раф',
    'Алик',
];

function boy(string $name1, string $name2): array
{
    $zdoroviye1 = 100;
    $zdoroviye2 = 100;

    $result = [];

    for ($i = 1; $i <= 3; $i++) {
        $sila1 = rand(1, 33);
        $sila2 = rand(1, 33);
        $zdoroviye1 -= $sila2;
        $zdoroviye2 -= $sila1;
        $result[] = 'Раунд ' . $i . ' ' . $name1 . '. Сила удара ' . $name1 . ' ' . $sila1 . ' Здоровье ' . $zdoroviye1 . ' .' . $name2 . ' ' . $sila2 . ' Здоровье ' . $zdoroviye2;
    }

    return $result;
}

function forCheck($name)
{
    for ($index = 0; $index < mb_strlen($name); $index++) {
        echo mb_str_split($name)[$index] . '<br>';
    }
}

echo '<pre><h1>';
print_r(boy($names[0], $names[2]));
forCheck('Шовхал');
echo '</pre></h1>';
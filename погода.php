<?php

function randomPogodaDlyaCity(string $city)
{
        $temp =   ' температура ' . rand(-50, 50) . ' градус';
        $vlaga =  ' влажность ' . rand(30, 90) . '%';
        $type = [
            'солнечно',
            'дождь',
            'ветер'
        ];

        return 'В городе ' . $city . ' ' . $temp . ' ' . $vlaga  . ' ' . $type[rand(0, count($type) - 1)];
}

echo '<pre>';
print_r(randomPogodaDlyaCity('Баку'));
echo '</pre>';

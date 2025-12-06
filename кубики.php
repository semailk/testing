<?php

$raf = 'Raf';
$denni = 'Denni';

function kubiki(string $name1, string $name2): array
{
    $brosok1 = [
        rand(1, 6),
        rand(1, 6)
    ];
    $brosok2 = [
        rand(1, 6),
        rand(1, 6)
    ];
    if (array_sum($brosok1) > array_sum($brosok2)) {
        $result = [$name1 => $brosok1, $name2 => $brosok2,
    'winner' => 'Победил у нас ' . $name1 . ' бросив кубик: ' . implode(',',$brosok1) . ' Сумма: ' . array_sum($brosok1) . ' против броска: ' . implode(',',$brosok2) . ' Сумма: ' . array_sum($brosok2) ];
    }elseif (array_sum($brosok1) < array_sum($brosok2)) {
        $result = [$name1 => $brosok1, $name2 => $brosok2,
    'winner' => 'Победил у нас ' . $name2 . ' бросив кубик: ' . implode(',', $brosok2) . ' Сумма: ' . array_sum($brosok2) . ' против броска: ' . implode(',',$brosok1) . ' Сумма: ' . array_sum($brosok1) ];
    }else{
        $result = [$name1 => $brosok1, $name2 => $brosok2,
    'winner' => 'Победила дружба ' . $name1 . ' бросив кубик: ' . implode(',', $brosok1) . ' Сумма: ' . array_sum($brosok1) . ' против броска: ' . implode(',',$brosok2) . ' Сумма: ' . array_sum($brosok2) ];
    }

    return $result;
}

echo '<pre>';
print_r(kubiki($raf, $denni));
echo '</pre>';
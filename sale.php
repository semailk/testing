<?php

function saleCalculate(int $price, int $sale): string
{
    $economSum = $price / 100 * $sale;

    return 'Изначальная цена: ' . $price . '$' .  ' Финальная цена: ' . $price - $economSum . '$' . ' экономия: ' . $economSum . '$';
}

echo '<pre>';
print_r(saleCalculate(100, 10));
echo '</pre>';

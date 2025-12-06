<?php

function calculate(int $number1, int $number2, string $operator): string
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
        case '/':
            return $number1 / $number2;
        case '%':
            return $number1 / 100 * $number2;
        default:
            return 'Оператор не поддерживается!';
    }
}

echo '<pre><h1>';
print_r(calculate(300, 5, '%'));
echo '</pre></h1>';
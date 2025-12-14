<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Шарики с PHP</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .ball {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            color: white;
            font-weight: bold;
            user-select: none;
        }
    </style>
</head>
<body>
<?php
$data = [
        'stats' => [
                'visits' => [
                        'today' => 120,
                        'week' => 780,
                        'month' => 3200,
                        'history' => [
                                ['date' => '2025-12-10', 'count' => 100],
                                ['date' => '2025-12-11', 'count' => 150],
                                ['date' => '2025-12-12', 'count' => 200],
                        ]
                ],
                'sales' => [
                        'products' => [
                                ['id' => 101, 'name' => 'Товар A', 'sold' => 12],
                                ['id' => 102, 'name' => 'Товар B', 'sold' => 7],
                        ],
                        'revenue' => [
                                'today' => 5000,
                                'week' => 35000
                        ]
                ]
        ],
        'misc' => [
                'empty_array' => [],
                'nested_empty' => [
                        'level1' => [
                                'level2' => []
                        ]
                ]
        ]
];

echo '<pre>';
foreach ($data['stats']['sales']['revenue'] as $key => $item) {
    print_r($key . ' ' . $item . '<br>');
}
echo '</pre>';
?>

<!--<div class="ball" style="background-color: #2ecc71;">G</div>-->

</body>
</html>

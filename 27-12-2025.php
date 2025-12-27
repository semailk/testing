<?php
$commands = [
    'names' => [
        'Барселона',
        'Таврия',
        'ФК Карабах'
    ],
    'countries' => [
        'Испания',
        'Крым',
        'Азербайджан'
    ],
    'cities' => [
        'Каталония',
        'Симферополь',
        'Баку'
    ],
    'images' => [
        'https://img.icons8.com/color/1200/barcelona-fc.jpg',
        'https://upload.wikimedia.org/wikipedia/ru/5/55/SC_Tavriya_Simferopol_Logo.svg',
        'https://upload.wikimedia.org/wikipedia/ru/d/de/%D0%9B%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF_%D0%A4%D0%9A_%D0%9A%D0%B0%D1%80%D0%B0%D0%B1%D0%B0%D1%85_%D0%90%D0%B3%D0%B4%D0%B0%D0%BC.png'
    ]
];

$result = [];

foreach ($commands as $index => $command) {
    foreach ($command as $key => $value) {
        if ($index == 'images') {
            $result[$key]['img'] = $value;
        } elseif ($index == 'names') {
            $result[$key]['name'] = $value;
        } elseif ($index == 'countries') {
            $result[$key]['country'] = $value;
        } elseif ($index == 'cities') {
            $result[$key]['city'] = $value;
        }
    }
}

$commands = $result;

echo '<pre>';
print_r($commands);
echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .commands {
        display: flex;
        justify-content: space-between;
    }
</style>
<body>
<div class="commands">
    <?php foreach ($commands as $command): ?>
        <div class="">
            <img src="<?php echo $command['img'] ?>" width="200" height="200" alt="">
            <h1><?php echo $command['name'] ?></h1>
            <h2><?php echo $command['country'] ?></h2>
            <h3><?php echo $command['city'] ?></h3>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
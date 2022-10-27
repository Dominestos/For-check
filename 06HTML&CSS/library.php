<?php

$library = [
    'authors' => [
        'john_makkormik@example.com' => [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
            'birthYear' => 1972,
        ],
        'martin_robert@example.com' => [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
            'birthYear' => 1952,
        ],
        'martin_fauler@example.com' => [
            'name' => 'Мартин Фаулер',
            'email' => 'martin_fauler@example.com',
            'birthYear' => 1963,
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
            'year' => 2013,
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
            'year' => 2011,
        ],
        [
            'title' => 'Шаблоны корпоративных приложений',
            'author' => 'martin_fauler@example.com',
            'year' => 2002,
        ],
    ],
];

$title = 'Библиотека программиста';

$red = (bool) rand(0, 1);
$tf = $red ? 'red' : 'black';


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="style.css?test=<?= rand(1,10000000)?>">
</head>
<body>
<h1 class="<?= $tf?>"><?php echo $title;?></h1>
<div>Авторов на портале <?php echo count($library['authors']);?></div>
<?php foreach ($library['books'] as $link => $info) {
    $class = $link % 2 == 0 ? 'class="grey"' : '';?>
    <p<?= " $class"?>><?= "Книга "?><b><?= '"' . $info['title'] . '" ,'?></b><?= " её написал " . $library['authors'][$info['author']]['name'] . " " . $library['authors'][$info['author']]['birthYear'] . " " . " ("?><a href="#"><?=$info['author']?></a><?=").";?></p>
<?php } ?>

</body>
</html>

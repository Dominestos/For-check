<pre>
<?php

$library = [
    'authors' => [
        [
            'name' => 'Джон Маккормик',
            'email' => 'john_makkormik@example.com',
        ],
        [
            'name' => 'Мартин Роберт',
            'email' => 'martin_robert@example.com',
        ],
    ],
    'books' => [
        [
            'title' => 'Чистый код: создание, анализ и рефакторинг',
            'author' => 'martin_robert@example.com',
        ],
        [
            'title' => 'Девять алгоритмов, которые изменили будущее',
            'author' => 'john_makkormik@example.com',
        ],
        [
            'title' => 'Идеальный программист',
            'author' => 'martin_robert@example.com',
        ],
    ],
];

foreach($library['authors'] as $link => $info) {
        $library['authors'][$info['email']] = $info;
        unset($library['authors'][$link]);
}
/*
foreach($library as $category => $catalog) {
    foreach($catalog as $link => $info) {
        switch ($category) {
            case 'authors':                                    //$category === 'authors';
                $library['authors'][$info['email']] = $info;
                break;
            case 'books':                                      //$category === 'books';
                $library['books'][$info['author']] = $info;
                break;
        }
        unset($library[$category][$link]);
    }
}*/

foreach($library as $category => $catalog) {
    foreach($catalog as $link => $info) {
        switch($link) {
            case 'john_makkormik@example.com':
                $library['authors'][$link]['birthDate'] = '1969';
                break;
            case 'martin_robert@example.com';
                $library['authors'][$link]['birthDate'] = '1952';
                break;
            case '0':
                $library['books'][$link]['publishDate'] = '2021';
                break;
            case '1':
                $library['books'][$link]['publishDate'] = '2014';
                break;
            case '2':
                $library['books'][$link]['publishDate'] = '2019';
                break;

        }
    }
}

$library['authors']['taaashaaa@mail.test'] = [
    'name' => 'Кама Пуля',
    'email' => 'taaashaaa@mail.test',
    'birthDate' => '1890',
];

$library['books'][3] = [
    'title' => 'Жубан. История совершенства',
    'author' => 'taaashaaa@mail.test',
    'publishDate' => '1488',
];

foreach($library as $category => $catalog) {
    foreach($catalog as $link => $info) {
        var_dump('Книга ' . $library['books'][$link]['title'] . ', её написал ' . $library['authors'][$library['books'][$link]['author']]['name'] . ' ' . $library['authors'][$library['books'][$link]['author']]['birthDate'] . '(' . $library['books'][$link]['author'] . ').');
    }
}

?>
</pre>
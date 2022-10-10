<pre>
<?php

$result2 = [
    "AUTHORS" => [
        1 => [
            "NAME" => "Зубенко Михаил Петрович",
            "EMAIL" => "mafioznik@mail.test"
        ],
        2 => [
            "NAME" => "Кама Пуля",
            "EMAIL" => "taaashaaa@mail.test"
        ]
    ],
    "BOOKS" => [
        1 => [
            "NAME" => '"Устами младенца"',
            "EMAIL" => "mafioznik@mail.test"
        ],
        2 => [
            "NAME" => '"Жубан - история совершенства"',
            "EMAIL" => "taaashaaa@mail.test"
        ]
    ]
];

var_dump("В нашей библиотеке точно есть две книги, которые вы ищете: " . $result2["BOOKS"][1]["NAME"] . " и " . $result2["BOOKS"][2]["NAME"] . ".");
var_dump("Пожалуйста, перестаньте писать гневные письма на адрес нашего любимого автора " . $result2["AUTHORS"][1]["NAME"] . " Пишите их лучше другому нашему автору - " . $result2["AUTHORS"][2]["NAME"] . ", мы его любим поменьше.");
?>
</pre>
<pre>
<?php

$result1 = [
    "AUTHOR" => [
        "NAME" => "Зубенко Михаил Петрович",
        "EMAIL" => "mafioznik@mail.test"
    ],
    "BOOK" => [
        "NAME" => '"Устами младенца"',
        "EMAIL" => "mafioznik@mail.test"
    ]
];

var_dump($result1["AUTHOR"]["NAME"] . " написал книгу, которая называется " . $result1["BOOK"]["NAME"] . ".");
var_dump("Автор " . $result1["AUTHOR"]["NAME"] . " ждёт ваших отзывав, напишите ему на электронную почту " . $result1["AUTHOR"]["EMAIL"] . ".");
?>
</pre>

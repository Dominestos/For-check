<pre>
<?php

require __DIR__ . '/func.php';

$data = [
    'short line',
    'what the fox say?',
    'very very very long line',
    'i dont know what to write here)',
    'QSOFT is great',
    'teacher is crazy',
    'qwertyqwertyqwertyqwerty',
];

$result = [];

foreach ($data as $key => $value) {

    $result[$key] = [cutString($value, 14)];
}


var_dump($result);
?>
    </pre>

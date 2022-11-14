<pre>
<?php
// Функции empty и isset
// Результат каждой проверки выведите с помощью функции var_dump()

// 1. Проверьте существует ли переменная $a и не пустая ли она $a
$a = 0; //не пустой

var_dump(isset($a));
var_dump(empty($a));


// 2. Проверьте существует ли переменная $b и не пустая ли она $b
$b = false; // не пустой

var_dump(isset($b));
var_dump(empty($b));

// 3. Проверьте существует ли переменная $c и не пустая ли она $c
$c = null;  // пустой

var_dump(isset($c));
var_dump(empty($c));

// 4. Проверьте существует ли переменная $d и не пустая ли она $d
$d = [];

var_dump(isset($d));
var_dump(empty($d));

echo "Значения массива";
// 5. Проверьте каждый элемент массива $items существует ли он и не пустой ли он
$items = [
    [],
    1,
    null,
    'Привет',
    ''
];

foreach($items as $value) {
    var_dump(isset($value));
    var_dump(empty($value));
}
?>
</pre>

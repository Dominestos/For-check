<pre>
<?php

$number1 = rand(0, 10);
$number2 = rand(0, 10);

var_dump($number1);
var_dump($number2);

$randAdd = $number1 + $number2;
$randSub = $number1 - $number2;
$randMult = $number1 * $number2;
$randDiv = $number1 / $number2;

var_dump($randAdd);
var_dump($randSub);
var_dump($randMult);
var_dump($randDiv);

var_dump($number1 > $number2);
var_dump($number1 < $number2);
var_dump($number1 = $number2);

$betterThan1 = ++$number1;
$lessThan2 = --$number2;
var_dump($betterThan1);
var_dump($lessThan2);
?>
</pre>

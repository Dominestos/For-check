<pre>
<?php
/*Реализуйте подсчёт различных букв в слове.
Создайте переменную $line, поместите в неё любой текст.
Напишите алгоритм, который подсчитает, сколько в этой переменной содержится различных символов (большие и маленькие буквы считайте за разные символы).*/
$line = "Hello, fking World!";

$lineScore = [];


for ($i = 0; $i < strlen($line); $i++) {
     $lineScore[$i] = substr($line, $i, 1) . ' = ' . substr_count($line, substr($line, $i, 1), 0, (strlen($line))) . '<br>';
}

$lineScoreNew = array_unique($lineScore);

foreach($lineScoreNew as $key => $value){
    echo $value;
}

?>
</pre>
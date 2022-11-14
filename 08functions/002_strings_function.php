<?php
// Функции по работе со строками

// 1. Уберите слеши "/" в начале и в конце строки, если они есть
$url = '/some/path/to/page/';
$updUrl = (substr($url, 1, -1));

var_dump($updUrl);

// 2. Уберите из строки все запятые и точки, а пробелы замените на тире
$line = 'Good news, everyone.';
/*
$line = substr($line, 0, -1);
$arrLine = explode(' ', $line);
$arrLine[1] = substr($arrLine[1], 0, -1);
$line = implode('-', $arrLine);
var_dump($line);*/

// 3. Посчитайте и выведите длину строки переменной $line
$length = strlen($line);
var_dump($length);


// 4. Найдите на какой позиции находится запятая в строке $line и выведите это значение
$position = strpos($line, ',', 0);
var_dump($position);


// 5. Вырежьте из строки $line подстроку после запятой до предпоследнего символа с конца
$resultLine = substr($line, 10, -1);
var_dump($resultLine);


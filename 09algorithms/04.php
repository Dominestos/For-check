<pre>
<?php
/*В неизвестном мире существует шоссе.
Это шоссе растянулось от 0 до 1000 км (а может, и дальше, мы не знаем, так далеко ещё никто не ходил).
На нём в случайных местах находятся два города.
На шоссе действует строгое ограничение скорости: 70 км/ч в городе и 90 км/ч за городом.

Дано:
$city1 — километр шоссе, на котором расположен центр первого города;
$city1Radius — радиус первого города, задается в км (наши города — это идеальный круг);
$city2 — километр шоссе, на котором расположен центр второго города;
$city2Radius — радиус второго города, задается в км.
Создайте перечисленные переменные и положите в них целые значения:
придумайте их сами или генерируйте случайные числа.

Задача
По шоссе едут десять машин, для каждой известен километр шоссе (случайное целое число от 0 до 1000), на котором машина находится в данный момент.
Все автолюбители строго соблюдают скоростной режим и всегда едут с максимальной разрешённой скоростью.
Для каждой машины выведите подобную строку: "Машина 4 едет по городу на 3 км со скоростью не более 70".
*/
$road = 1000;
$city1 = rand(200, 300);
$city2 = rand(700, 800);
$city1Radius = rand(1, 200);
$city2Radius = rand(1, 200);


$dasAutos = [];

for ($i = 0; $i < 10; $i++){
    $dasAutos[$i] = rand(0, 1000);
}

var_dump($dasAutos);

foreach($dasAutos as $carNum => $location){
    if (($location >= ($city1 - $city1Radius) && $location <= ($city1 + $city1Radius)) || ($location >= ($city2 - $city2Radius) && $location <= ($city2 + $city2Radius))){
        echo "Машина " . ($carNum + 1) . " едет по городу на " . $location . "км со скоростью не более 70 км/ч." . "<br>";
    }else{
        echo "Машина " . ($carNum + 1) . " едет вне города на " . $location . "км со скоростью не более 90 км/ч." . "<br>";
    }
}


?>
</pre>
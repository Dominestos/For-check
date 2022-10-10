<pre>
<?php

$daysBeforeExam = rand(0, 9);
$daysToPrepareForExam = rand(0, 9);

var_dump($daysBeforeExam);
var_dump($daysToPrepareForExam);

$moreDaysExam = $daysToPrepareForExam > $daysBeforeExam ? 'Мне крышка!!!' : 'Главное - не расслабляться';
$lessDaysExam = $daysToPrepareForExam < $daysBeforeExam ? 'Ууу, ещё успею в дотку поиграть' : 'Успею или не успею';
$perfExamDays = $daysToPrepareForExam == $daysBeforeExam ? 'Впритирочку' : 'Либо всё плохо, либо очень плохо';

var_dump($moreDaysExam);
var_dump($lessDaysExam);
var_dump($perfExamDays);
?>
</pre>
<?php

$N = 1000;
$firstNumber = 3;
$secondNumber = 5;

$start_time = microtime(true);

for ($iterator = 1; $iterator <= $N; ++$iterator) {
    $print = '';
    if (!($iterator % $firstNumber)) {
        $print .= 'Fizz';
    }

    if (!($iterator % $secondNumber)) {
        $print .= 'Buzz';
    }

    echo ($print == '' ? $iterator : $print)."\r\n";
}

$end_time = microtime(true);
$elapsed_time = $end_time - $start_time;
echo "Elapsed time: $elapsed_time seconds";

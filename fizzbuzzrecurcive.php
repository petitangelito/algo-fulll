<?php

function fizzBuzzRecurcive(int $max, int $current = 1, int $firstNumber = 3, int $secondNumber = 5): void
{
    $print = '';
    if (!($current % $firstNumber)) {
        $print .= 'Fizz';
    }

    if (!($current % $secondNumber)) {
        $print .= 'Buzz';
    }

    echo ($print == '' ? $current : $print)."\r\n";
    if ($current >= $max) {
        return;
    } else {
        fizzBuzzRecurcive($max, ++$current);
    }
}

$start_time = microtime(true);

$N = 1000;

fizzBuzzRecurcive($N);

$end_time = microtime(true);
$elapsed_time = $end_time - $start_time;
echo "Elapsed time: $elapsed_time seconds";

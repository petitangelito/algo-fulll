<?php

$fizzbuzzStarter = [
    ['N' => 1000, 'config' => [3 => 'Fizz', 5 => 'Buzz', 11 => 'Pop']],
];

$start_time = microtime(true);
foreach ($fizzbuzzStarter as $fizzBuzzConfig) {
    for ($iterator = 1; $iterator <= $fizzBuzzConfig['N']; ++$iterator) {
        $print = '';
        foreach ($fizzBuzzConfig['config'] as $divider => $expression) {
            if (!($iterator % $divider)) {
                $print .= $expression;
            }
        }

        echo ($print == '' ? $iterator : $print)."\r\n";
    }
}

$end_time = microtime(true);
$elapsed_time = $end_time - $start_time;
echo "Elapsed time: $elapsed_time seconds";

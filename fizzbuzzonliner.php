<?php

$N = 1000;
$firstNumber = 3;
$secondNumber = 5;

$start_time = microtime(true);

for ($iterator = 0; $iterator++ < $N;) {
    echo ($iterator % $firstNumber ? '' : 'Fizz') . ($iterator % $secondNumber ? '' : 'Buzz') ?: $iterator, "\n";
}

$end_time = microtime(true);
$elapsed_time = $end_time - $start_time;
echo "Elapsed time: $elapsed_time seconds";
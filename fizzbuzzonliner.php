<?php

$N = 1000;
$firstNumber = 3;
$secondNumber = 5;

for ($iterator = 0; $iterator++ < $N;) {
    echo ($iterator % $firstNumber ? '' : 'Fizz').($iterator % $secondNumber ? '' : 'Buzz') ?: $iterator,"\n";
}

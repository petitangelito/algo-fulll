# Algo-fulll

Pour cette partie algorithmique, j'ai choisi de présenter quatre algorithmes différents.

## Classic FizzBuzz

Le premier est un FizzBuzz classique.
L'accent est mis sur la simplicité de la maintenance de ce code et sur sa lisibilité.


```php
for ($iterator = 1; $iterator <= $N; ++$iterator) {
    $print = '';
    if (!($iterator % $firstNumber)) {
        $print .= 'Fizz';
    }

    if (!($iterator % $secondNumber)) {
        $print .= 'Buzz';
    }

    echo ($print === '' ? $iterator : $print) . "\r\n";
}

```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzz.php`.

## Onliner FizzBuzz

Ce FizzBuzz est une version compressée de l'algorithme précédent.
Le seul intérêt réside dans sa concision. Cependant, il est moins intuitif à relire et légèrement plus difficile à maintenir.

```php
for ($iterator = 0; $iterator++ < $N;) {
    echo ($iterator % $firstNumber ? '' : 'Fizz') . ($iterator % $secondNumber ? '' : 'Buzz') ?: $iterator, "\n";
}

```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzzonliner.php`.

## Scalable FizzBuzz

Ce FizzBuzz est une version plus évoluée et plus évolutive du premier.
Il reste simple à maintenir et permet un contrôle total du résultat en fonction du paramétrage.

```php
$fizzbuzzConfigs = [
    ['N' => 1000, 'config' => [3 => 'Fizz', 5 => 'Buzz', 11 => 'Pop']],
];

foreach ($fizzbuzzConfigs as $fizzBuzzConfig) {
    for ($iterator = 1; $iterator <= $fizzBuzzConfig['N']; ++$iterator) {
        $print = '';
        foreach ($fizzBuzzConfig['config'] as $divider => $expression) {
            if (!($iterator % $divider)) {
                $print .= $expression;
            }
        }

        echo ($print === '' ? $iterator : $print) . "\r\n";
    }
}
```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzzscalable.php`.

## Recurcive FizzBuzz

Ce FizzBuzz est une version récursive du FizzBuzz (parce que pourquoi pas).

```php
function fizzBuzzRecursive(int $max, int $current = 1, int $firstNumber = 3, int $secondNumber = 5): void
{
    $print = '';
    if (!($current % $firstNumber)) {
        $print .= 'Fizz';
    }

    if (!($current % $secondNumber)) {
        $print .= 'Buzz';
    }

    echo ($print === '' ? $current : $print) . "\r\n";

    if ($current < $max) {
        fizzBuzzRecursive($max, ++$current);
    }
}

$N = 1000;

fizzBuzzRecursive($N);
```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzzrecurcive.php`.
# Algo-fulll

Pour cette partie algorithmique j'ai choisi de présenter quatres algo différents.

## Classic FizzBuzz

Le premier est un FizzBuzz des plus classique.
L'accent est mis sur la simplificé à maintenir ce code et a ce qu'il soit le plus lisible possible.


```php
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
```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzz.php`.

## Onliner FizzBuzz

Ce FizzBuzz est simplement une version compréssée de l'algorithme précédent.
Le seul interet étant qu'il est plus compéressé, 
il est toutefois moins intuitif à relire et sera légérement plus difficile à maintenir.

```php
for ($iterator = 0; $iterator++ < $N;) {
    echo ($iterator % $firstNumber ? '' : 'Fizz').($iterator % $secondNumber ? '' : 'Buzz') ?: $iterator,"\n";
}
```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzzonliner.php`.

## Scalable FizzBuzz

Ce FizzBuzz est une version plus évoluée et plus scalable du premier FizzBuzz.
Il reste simple à maintenir, l'intéret et de permettre un controle total du résultat en fonction du paramétrage.

```php
$fizzbuzzStarter = [
    ['N' => 1000, 'config' => [3 => 'Fizz', 5 => 'Buzz', 11 => 'Pop']],
];

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
```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzzscalable.php`.

## Recurcive FizzBuzz

Ce FizzBuzz est une version recurcive du FizzBuzz.

```php
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

$N = 1000;

fizzBuzzRecurcive($N);
```

Vous pourrez trouver son implémentation complète dans le fichier `fizzbuzzrecurcive.php`.
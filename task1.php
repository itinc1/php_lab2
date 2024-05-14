<?php


echo "Введите три числа через пробел: ";
$input = readline();
$numbers = explode(' ', $input);

$diff1 = $numbers[1] - $numbers[0];
$diff2 = $numbers[2] - $numbers[1];

if ($diff1 == $diff2) {
    echo $numbers[0] . ", " . $numbers[1] . ", " . $numbers[2] . " образуют арифметическую прогрессию.";
} else {
    echo $numbers[0] . ", " . $numbers[1] . ", " . $numbers[2] . " не образуют арифметическую прогрессию.";
}


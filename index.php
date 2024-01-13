<?php

$i = 1;
while ($i <= 10) {
    echo $i++;
}

$number = 1;
$factorial = 1;
while ($number <= 5) {
    $number++;
    $factorial *= $number;
    if ($number === 5) {
        echo $factorial . PHP_EOL;
    }
}

$numb = 1;
while ($numb <= 20) {
    $numb++;
    if ($numb % 2 === 0) {
        echo $numb . PHP_EOL;
    }
}

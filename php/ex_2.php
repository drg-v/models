<?php
$integer = 150;
echo gettype($integer);
echo "\n" . PHP_INT_MAX . "\n\n";

$x = 0.00014;
$y = 1.4e-4;
echo $x === $y . "\n\n";

echo sqrt(-4). "\n";
echo 1.9e308 . "\n\n";

$a = array( //асоціативний масив
    0 => "Нульовий елемент",
    "one" => "Наступний елемент"
);
echo $a[0] . " , " . $a["one"] . "\n\n";

echo isset($a) . "\n";
unset($a[0]);
echo $a[0];


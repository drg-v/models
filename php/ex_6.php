<?php
$a = 7;
$b = 8;
$c = '7';

if($a == $b)
    echo "a==b\n";
else
    echo "a!=b\n";
if($a == $c)
    echo "a==c\n";
else
    echo "a!=c\n";
if($a === $c)
    echo "a===c\n";
else
    echo "a!==c\n";
echo $a <=> $b;
if("" == 0)
    echo "\n\"\"==0\n\n";

$x = array(1, 4, 6);
$y = array("1", "4", "6");
if($x == $y)
    echo "\$x == \$y\n\n";

class A {}
$A1 = new A();
$A2 = new A();
if($A1 == $A2) echo "Об'єкти рівні\n";
if($A1 === $A2) echo "Об'єкти еквівалентні\n";

echo $x == $y ? 1 : 0;
echo "\n\n";

$each = array(
    0 => "zero",
    1 => "one",
    2 => "two",
    3 => "three"
);
foreach($each as $number => $value)
    echo $number."  ".$value."\n";
echo "\n";

foreach($each as $number => &$value)
    $value.=" changed";
foreach($each as $number => $value)
    echo $number."  ".$value."\n";
echo "\n";

$new_syntax = [4 => "four", 5 => "five", 6 => "six"];
$syntax = [1 => "one", 2 => "two"];
$all = $syntax + $new_syntax;
for(reset($all); ($k = key($all)); next($all))
    echo "$k => {$all[$k]}\n";
echo "\n";


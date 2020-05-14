<?php
//references

$x = 2020;
$y =& $x;
$y = 150;
echo "x = $x, y = $y";

echo "\n\n";

$right = 1;
$number = "right";
echo $$number."\n\n";

$a = array('0'=>'zero', '1'=>'one', '2'=>'two');
print_r($a);
var_dump($a);
var_export($a);
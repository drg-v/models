<?php
$a = 10;
$b = "number";
if(is_int($a))
    echo $a . " is integer\n";
if(is_int($b))
    echo $b . " is integer\n";
if(is_double($a))
    echo $a . " is double\n";
if(is_string($b))
    echo $b . " is string\n";
settype($a, "string");
if(is_string($a))
    echo $a . " is string\n";
echo (int)$a . gettype($a);

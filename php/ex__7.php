<?php
$list = ["one", "two", "three", "four", "five"];
$result = implode(", ", $list);
echo $result."\n\n";
$result = explode(", ", $result);
foreach($result as $i)
    echo $i." ";
echo "\n\n";

$str = serialize($list);
echo $str."\n\n";
$arr = unserialize($str);
foreach($arr as $q)
    echo $q." ";
echo "\n\n";

sort($arr);
print_r($arr);

shuffle($arr);
print_r($arr);

$numbers = range(0, 10);
print_r($numbers);
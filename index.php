<?php
// assignment no 04

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)


$arr = array("sabbir", "korim", "refuji", "Yousof Vai");

function arrayByLenth($arr) {
    usort($arr, function($a, $b) {
        return (strlen($a) - strlen($b));
    });

    return $arr;
}

print_r(arrayByLenth($arr));

echo "\n";

$fStr = 'Sabbir Ahmmed';
$lStr = 'Is bad boy';

function concatenateTwoStrings($a, $b) {
    $a = explode(' ',$a);
    $a = array_shift($a);
    
    $b = explode(' ',$b);
    $b = strrev(array_pop($b));

    return ($a.' '.$b);
}
echo concatenateTwoStrings($fStr, $lStr);

echo "\n";

$oldArray = array("sabbir", "korim", "refuji", "Yousof Vai");

function removeLastFirstAndReturnArray($oldArray){
    array_pop($oldArray);
    array_shift($oldArray);

    return $oldArray;
}
$newArroy = removeLastFirstAndReturnArray($oldArray);
print_r($newArroy);

echo "\n";


function containsOnlyLettersAndWhitespace($str) {
    if ( preg_match ("/^[a-zA-Z\s]+$/",$str)) {
        $result = "string contains only letters and whitespace";
    } else {
        $result = "not string contains only letters and whitespace";
    }
    return $result;
}
$str1 = "Hellow word";
$str2 = "Hellow word jaman";

echo containsOnlyLettersAndWhitespace($str1).PHP_EOL;
echo containsOnlyLettersAndWhitespace($str2);
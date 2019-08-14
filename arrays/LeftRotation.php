<?php
/*
A left rotation operation on an array of size  shifts each of the array's elements  unit to the left. For example, if  left rotations are performed on array , then the array would become .
Given an array of  integers and a number, , perform  left rotations on the array. Then print the updated array as a single line of space-separated integers.

https://www.hackerrank.com/challenges/array-left-rotation/problem
*/
function rotationLeft($length, $rotations, $array)
{
    $rotatedArray = [];
    foreach ($array as $key => $value) {
        $tempKey = $key - $rotations;
        if ($tempKey < 0) {
            $tempKey = $tempKey + $length;
        }
        $rotatedArray[$tempKey] = $value;
    }
    ksort($rotatedArray);
    echo  implode(' ', $rotatedArray);
}

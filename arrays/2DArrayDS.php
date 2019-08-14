<?php
/*
  Function Description
  Complete the function hourglassSum in the editor below. It should return an integer, the maximum hourglass sum in the array.
 */
function hourglassSum($arr)
{
    $limit = count($arr) - 2;
    $maxHourGlass = -63;
    for ($col = 0; $col < $limit; $col++) {
        for ($row = 0; $row < $limit; $row++) {
            $rowColSum1 = $arr[$row][$col] + $arr[$row][$col + 1] + $arr[$row][$col + 2];
            $rowColSum2 = $arr[$row + 1][$col + 1];
            $rowColSum3 = $arr[$row + 2][$col] + $arr[$row + 2][$col + 1] + $arr[$row + 2][$col + 2];
            $tempHourGlass = $rowColSum1 + $rowColSum2 + $rowColSum3;
            if ($tempHourGlass >= $maxHourGlass) {
                $maxHourGlass = $tempHourGlass;
            }
        }
    }
    return $maxHourGlass;
}

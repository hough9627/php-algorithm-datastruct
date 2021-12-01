<?php


/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {

    $last = count($digits) - 1;

    while ($last >= 0) {

        if ($digits[$last] != 9) {
            $digits[$last] += 1;
            return $digits;
        } else {
            $digits[$last] = 0;
            if ($last == 0) {
                return array_merge([1], $digits);
            }
        }

        $last--;
    }

}


$digits = [1, 2, 3];
$digits = [4,3,2,1];
$digits = [9,9];
var_dump(plusOne($digits));


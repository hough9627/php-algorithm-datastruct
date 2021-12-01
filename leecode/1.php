<?php


function twoSum($nums, $target) {

    $length = count($nums);

    $hashMap = [];
    for ($i = 0; $i < $length; $i++) {
        $needNum = $target - $nums[$i];
        if (isset($hashMap[$needNum])) {
            return [$hashMap[$needNum], $i];
        } else {
            $hashMap[$nums[$i]] = $i;
        }
    }
}

$nums = [2,7,11,15];
$target = 9;
var_dump(twoSum($nums, $target));

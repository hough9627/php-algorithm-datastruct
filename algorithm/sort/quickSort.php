<?php


/**
 * 快速排序
 * @param $arr
 * @return array
 */
function quickSort($arr)
{

    $num = count($arr);
    if ($num <= 1) {
        return $arr;
    }

    $mid = $arr[0];
    $left = $right = [];
    for ($i = 1; $i < $num; $i++) {
        if ($arr[$i] > $mid) {
            $right[] = $arr[$i];
        } else {
            $left[] = $arr[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, [$mid], $right);
}

$arr = [4,6,2,5,7,1,8,9,3];
var_dump(quickSort($arr));
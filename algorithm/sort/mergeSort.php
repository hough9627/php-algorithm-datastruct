<?php


/**
 * 归并排序
 * @param $arr
 * @return array
 */
function mergeSort($arr)
{
    $num = count($arr);
    if ($num <= 1) {
        return $arr;
    }

    $mid = ceil($num/2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);
    return mergeSortFunc($left, $right);
}

function mergeSortFunc($left, $right)
{
    $result = [];
    while (count($left) && count($right)) {
        if ($left[0] < $right[0]) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }

    while (count($left)) {
        array_push($result, array_shift($left));
    }
    while (count($right)) {
        array_push($result, array_shift($right));
    }
    return $result;
}

$arr = [4,6,2,5,7,1,8,9,3];
var_dump(mergeSort($arr));
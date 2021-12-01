<?php

/**
 * 选择排序
 */

// 交换数组中两个索引的值
function swap(&$arr, $i, $j)
{
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;
}

function selectionSort($arr)
{
    $num = count($arr);
    if ($num <= 1) {
        return $arr;
    }

    for ($i = 0; $i < $num - 1; $i++) {
        $minIndex = $i;
        $minIsChange = false;
        for ($j = $i; $j < $num; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
                $minIsChange = true;
            }
        }
        // 遍历结束，此时确定了比较得到的最小值
        if ($minIsChange) {
            swap($arr, $minIndex, $i);
        }
    }

    return $arr;
}

$arr = [4,6,2,5,7,1,8,9,3];
var_dump(selectionSort($arr));
<?php

/**
 * 插入排序
 */

// 交换数组中两个索引的值
function swap(&$arr, $i, $j)
{
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;
}

function insertionSort($arr)
{

    $num = count($arr);
    if ($num <= 1) {
        return $arr;
    }

    for ($i = 1; $i < $num; $i++) {
        // 确定比较的位置
        $value = $arr[$i];
        $index = $i;
        $j = $i - 1;
        while ($j >= 0) {
            if ($arr[$j] > $value) {
                swap($arr, $index, $j);
                $index = $j;
            } else {
                continue;
            }
            $j--;
        }
    }
    return $arr;
}

$arr = [4,6,2,5,7,1,8,9,3];
var_dump(insertionSort($arr));

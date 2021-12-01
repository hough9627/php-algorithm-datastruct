<?php

/**
 * 冒泡排序
 */

// 交换数组中两个索引的值
function swap(&$arr, $i, $j)
{
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;
}

// 冒泡排序
function bubbleSort($arr){
    $num = count($arr);
    if ($num <= 1) {
        return $arr;
    }

    for ($i = 0; $i < $num; $i++) {
        // 是否有数据交换，如果当前循环无数据交换，那可以停止程序执行。
        $haveDataSwap = false;
        for ($j = 0; $j < $num - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                swap($arr, $j, $j+1);
                $haveDataSwap = true;
            }
        }
        if (!$haveDataSwap) {
            break;
        }
    }
    return $arr;
}


$arr = [4,6,2,5,7,1,8,9,3];
var_dump(bubbleSort($arr));

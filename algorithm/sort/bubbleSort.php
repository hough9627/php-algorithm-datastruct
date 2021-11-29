<?php


// 交换数组中两个索引的值
function swap(&$arr, $i, $j)
{
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;
}

// 冒泡排序
function bubbleSort($arr){
    if (empty($arr) || count($arr) == 1) {
        return $arr;
    }

    $num = count($arr);
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j < $num - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                swap($arr, $j, $j+1);
            }
        }
    }
    return $arr;
}


$arr = [4,6,2,5,7,1,8,9,3];
var_dump(bubbleSort($arr));

<?php


function threeSum($nums) {

    $result = [];
    $length = count($nums);
    if ($length < 3) {
        return [];
    }

    // 排序
    sort($nums);

    for ($i = 0; $i < $length-2; $i++) {

        // 因为有序 当i > 0  L R 更大，因此直接返回
        if ($nums[$i] > 0) {
            return $result;
        }

        if ($i > 0) {
            // 判断重复
            if ($nums[$i] == $nums[$i-1]) {
                continue;
            }
        }

        $left = $i + 1;
        $right = $length - 1;

        while ($left < $right) {
            $curSum = $nums[$i] + $nums[$left] + $nums[$right];
            if ($curSum == 0) {
                $result[] = [$nums[$i], $nums[$left], $nums[$right]];
                // 去重
                while ($left < $right && $nums[$left] == $nums[$left+1]) {
                    $left++;
                }
                while ($left < $right && $nums[$right] == $nums[$right-1]) {
                    $right--;
                }
                $left++;
                $right--;
            } elseif ($curSum > 0) {
                $right--;
            } else {
                $left++;
            }
        }
    }

    return $result;

}

$nums = [-1, 0, 1, 2, -1, -4];
// -4, -1, -1, 0, 1, 2
var_dump(threeSum($nums));
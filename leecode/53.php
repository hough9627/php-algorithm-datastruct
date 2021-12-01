<?php


function maxSubArray($nums)
{
    $n = count($nums);

    $maxSum = $curSum = $nums[0]; // 子序列和结果
    for ($i = 1; $i < $n; $i++) {
        $curSum = max($nums[$i], $curSum + $nums[$i]);
        $maxSum = max($maxSum, $curSum);
    }
    return $maxSum;
}

$nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
var_dump(maxSubArray1($nums));
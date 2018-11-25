<?php
/**
 * Created by PhpStorm.
 * User: yousab
 * Date: 11/20/18
 * Time: 12:36 PM
 */

/**
 * Apply Longest Increasing Subsequence
 *
 * @param $arr
 * @param $max
 * @return int
 */
function lis($arr, $max) {
    if(count($arr) == 0) {
        return 1;
    }

    if($arr[0] > $max) {
        $max = $arr[0];
        array_shift($arr);
        return 1 + lis($arr, $max);
    }

    array_shift($arr);
    return lis($arr, $max);
}

/**
 * Driven code for testing implementation.
 */
$array = [3,10,2,1,20];
$len = lis($array, $array[0]);
printf("Length of LIS: " . $len);

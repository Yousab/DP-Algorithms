<?php
/**
 * Created by PhpStorm.
 * User: yousab
 * Date: 11/15/18
 * Time: 11:55 AM
 */

/**
 * Sorting an array using quick sort technique
 *
 * @param $arr
 * @param $low
 * @param $high
 */
function quickSort(& $arr, $low, $high)
{
    if ($low < $high) {
        $partition = partition($arr, $low, $high);
        quickSort($arr, $low, $partition - 1);
        quickSort($arr, $partition + 1, $high);
    }
}

/**
 * Use partiotion method in quick sort algorithm
 *
 * @param $arr
 * @param $low
 * @param $high
 * @return int
 */
function partition(& $arr, $low, $high)
{
    $pivot = $arr[$high];
    $index = $low - 1;
    for ($j = $low; $j < $high; $j++) {
        if ($arr[$j] <= $pivot) {
            $index++;
            swap($arr, $index, $j);
        }
    }
    swap($arr, $index + 1, $high);

    return $index + 1;
}

/**
 * Swap two numbers in array
 *
 * @param $arr
 * @param $first
 * @param $second
 */
function swap(& $arr, $first, $second)
{
    $tmp = $arr[$first];
    $arr[$first] = $arr[$second];
    $arr[$second] = $tmp;
}

/**
 * Driven code for test implementation.
 *
 */
$array = [10, -4, 30, 90, 40, -8, 50, 70];
quickSort($array, 0, count($array) - 1);
for ($i = 0; $i < count($array); $i++) {
    print $array[$i].'  ';
}

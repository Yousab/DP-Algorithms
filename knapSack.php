<?php
/**
 * Created by PhpStorm.
 * User: yousab
 * Date: 11/22/18
 * Time: 06:46 PM
 */

/**
 * Get the maximum total value in the knapsack from respected weights and its values
 *
 * @param $knapsackWeight
 * @param $weights
 * @param $values
 * @param $numberOfItems
 * @return int
 */
function knapSack($knapsackWeight, $weights, $values, $numberOfItems)
{

    //Recursive stoping base case
    if ($numberOfItems == 0 || $knapsackWeight == 0) {
        return 0;
    }

    //Ignore nth element if it is greater than knapsack weight
    if ($values[$numberOfItems - 1] > $knapsackWeight) {
        knapsack($knapsackWeight, $weights, $values, $numberOfItems - 1);
    }

    return max($values[$numberOfItems - 1] + knapsack($knapsackWeight - $weights[$numberOfItems - 1], $weights, $values, $numberOfItems - 1), knapsack($knapsackWeight, $weights, $values, $numberOfItems - 1));
}

/**
 * Driven code for testing implementation.
 */
$weights = [3, 5, 6, 4];
$values = [14, 8, 10, 12];
$knapsackWeight = 18;
$numberOfItems = count($values);
echo knapSack($knapsackWeight, $weights, $values, $numberOfItems);

<?php



/*

=======================
=== Problem Solving === 
=======================

[ sum of array singles ]


In this Kata, you will be given an array of numbers in which two numbers occur once and the rest occur only twice. 
Your task will be to return the sum of the numbers that occur only once.

For example, repeats([4,5,7,5,4,8]) = 15 because only the numbers 7 and 8 occur once, and their sum is 15. 
Every other number occurs twice.

More examples in the test cases.

Good luck!

If you like this Kata, please try:

Sum of prime-indexed elements

Sum of integer combinations




========================================
===== Solution ( best practices ) ===== 
=======================================
 */


function repeats(array $array): int
{
    $counts = [];
    $sum_numbers_not_repeat = 0;

    foreach ($array as $value) {
        if (isset($counts[$value])) {
            $counts[$value]++;
        } else {
            $counts[$value] = 1;
        }
    }

    foreach ($counts as $key =>  $count) {
        if ($count === 1) {
            $sum_numbers_not_repeat += $key;
        }
    }

    return $sum_numbers_not_repeat;
}

/*
===============================================
===== Solution ( Used Function Built In ) ===== 
===============================================

function repeats($array)
{
    $sum_two_number_not_repeat = 0;
    $array = array_count_values($array);

    foreach ($array as $key => $value) {
        if ($value == 1) {
            $sum_two_number_not_repeat += $key;
        }
    }
    return $sum_two_number_not_repeat;
}

 */


/**
 * Output
 */



echo repeats([4, 5, 7, 5, 4, 8]) . "<br>"; // 15
echo repeats([9, 10, 19, 13, 19, 13]) . "<br>"; // 19
echo repeats([16, 0, 11, 4, 8, 16, 0, 11]) . "<br>"; // 12
echo repeats([5, 17, 18, 11, 13, 18, 11, 13]) . "<br>"; // 22
echo repeats([5, 10, 19, 13, 10, 13]) . "<br>"; // 24

// echo chooseBestSum(163, 3, $ts). "<br>"; //163, 

<?php

/*

=======================
=== Problem Solving === 
=======================

[ Even_numbers_in_an_array]


Given an array of numbers, return a new array of length number containing the last even numbers from the original array (in the same order). 
The original array will be not empty and will contain at least "number" even numbers.


For example:

([1, 2, 3, 4, 5, 6, 7, 8, 9], 3) => [4, 6, 8]
([-22, 5, 3, 11, 26, -6, -7, -8, -9, -8, 26], 2) => [-8, 26]
([-22, 5, 3, 11, 26, -6, -7, -8, -9, 10, 8, 6], 4); // [-8 , 10, 8, 6]
([6, -25, 3, 7, 5, 5, 7, -3, 23], 1) => [6]


====================
===== Solution =====
=====================
 */
function even_numbers(array $array, $n)
{
    $evens = [];

    for ($i = 0; $i < count($array); $i++) {
        if (($array[$i] % 2) == 0) {
            $evens[] =  $array[$i];
        }
    }

    $result = [];
    $count_number_even = count($evens);

    if ($n <= $count_number_even) {

        for ($q = $count_number_even - $n; $q < $count_number_even; $q++) {
            $result[] = $evens[$q];
        }
    } else {
        return $evens;
    }

    return $result;
}
/**
 * Output
 */
echo "<pre>";

print_r(even_numbers([1, 2, 3, 4, 5, 6, 7, 8, 9], 3)); // [4, 6, 8];

print_r(even_numbers([-22, 5, 3, 11, 26, -6, -7, -8, -9, -8, 26], 2)); // [-8, 26];

print_r(even_numbers([-22, 5, 3, 11, 26, -6, -7, -8, -9, 10, 8, 6], 4)); // [-8 , 10, 8, 6]

print_r(even_numbers([6, -25, 3, 7, 5, 5, 7, -3, 23], 1)); // [6];

print_r(even_numbers([64], 2)); // [64]; Successfully Handle Error $n => 2 grater than count evens 

print_r(even_numbers([], 0)); // []

echo "</pre>";


/*

==========================================================================================
=== Problem Solving (2) added point =>  (Arrange the numbers from smallest to largest) ===
===========================================================================================

[ Even_numbers_in_an_array]


Given an array of numbers, return a new array of length number containing the last even numbers 
from the original array (Arrange the numbers from smallest to largest). 
The original array will be not empty and will contain at least "number" even numbers. 


For example:

([-22, 5, 3, 11, 26, -6, -7, -8, -9, -8, 26], 2); // [-8, 26];

([-22, 5, 3, 11, 26, -6, -7, -8, -9, 10, 8, 6], 4); // [-8, , 8 , 6 , 10];


======================
===== Solution ======
======================

function even_numbers(array $array, $n)
{
    [1- Filter Numbers even From $array]

    $numbers_even = [];

    for ($i = 0; $i < count($array); $i++) {
        if (($array[$i] % 2) == 0) {
            $numbers_even[] =  $array[$i];
        }
    }

    [2- Slice From Array Last $n ]

    $result = [];
    $count_number_even = count($numbers_even);

    if ($n <= $count_number_even) {

        for ($q = $count_number_even - $n; $q < $count_number_even; $q++) {
            $result[] = $numbers_even[$q];
        }
    } else {
        return $numbers_ even;
    }

    [3- order Array]

    for ($i = 0; $i < count($result) - 1; $i++) {

        $min_index = $i;

        for ($a = $i + 1; $a  < count($result); $a++) {
            if ($result[$a] < $result[$min_index]) {
                $min_index = $a;
            }

            $temp = $result[$min_index];
            $result[$min_index] = $result[$i];
            $result[$i] = $temp;
        }
    }

    return $result;
}

/**
 * Output

echo "<pre>";

print_r(even_numbers([1, 2, 3, 4, 5, 6, 7, 8, 9], 3)); // [4, 6, 8];

print_r(even_numbers([-22, 5, 3, 11, 26, -6, -7, -8, -9, -8, 26], 2)); // [-8, 26];

print_r(even_numbers([-22, 5, 3, 11, 26, -6, -7, -8, -9, 10, 8, 6], 4)); // [-8, , 8 , 6 , 10];

print_r(even_numbers([6, -25, 3, 7, 5, 5, 7, -3, 23], 1)); // [6];

print_r(even_numbers([64], 2)); // [64]; Successfully Handle Error $n => 2 grater than count evens 

print_r(even_numbers([], 0)); // []

echo "</pre>";

 */

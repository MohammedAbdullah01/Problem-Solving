<?php

/*

=======================
=== Problem Solving === 
=======================

[ Number_climber ]


For every positive integer N, there exists a unique sequence starting with 1 and ending with N and such that every number in the sequence is 
either the double of the preceeding number or the double plus 1.

For example, given N = 13, the sequence is [1, 3, 6, 13], because . . . :

    3 =  2*1 +1
    6 =  2*3
    13 = 2*6 +1

Write a function that returns this sequence given a number N. Try generating the elements of the resulting list in ascending order, i.e., 
without resorting to a list reversal or prependig the elements to a list.


=====================
===== Solution ===== 
=====================
 */
function climb(int $n): array
{
    $numbers = [];
    $result = [];

    while ($n >=  1) {
        $numbers[] = $n;
        $n = (int)($n / 2);
    }
    for ($i = count($numbers) - 1; $i >= 0; $i--) {
        $result[] = $numbers[$i];
    }
    return $result;
}
/**
 * Output
 */
echo "<pre>";
print_r(climb(1)); // [1]);
print_r(climb(10)); // [1, 2, 5, 10]);
print_r(climb(13)); // [1, 3, 6, 13]);
print_r(climb(0)); // []);
echo "</pre>";

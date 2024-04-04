<?php

/*

===========================
==== Problem Solving  ===== 
===========================

[ Count the divisors of a number ]

Count the number of divisors of a positive integer n.

Random tests go up to n = 500000.

Examples (input --> output)

4 --> 3 // we have 3 divisors - 1, 2 and 4
5 --> 2 // we have 2 divisors - 1 and 5
12 --> 6 // we have 6 divisors - 1, 2, 3, 4, 6 and 12
30 --> 8 // we have 8 divisors - 1, 2, 3, 5, 6, 10, 15 and 30


====================
===== Solution ===== Time: 3504ms 
====================
 */


function divisors($n)
{
    $count = 0;

    for ($i = 1; $i <= $n; $i++) {

        if (is_int($n / $i)) {
            $count++;
        }
    }
    return $count;
}



/**
 * Output
 */
echo divisors(1) . "<br>"; // 1
echo divisors(10) . "<br>"; // 4
echo divisors(11) . "<br>"; // 2
echo divisors(54) . "<br>"; // 8
echo divisors(64) . "<br>";// 7

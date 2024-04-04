<?php



/*

=======================
=== Problem Solving === 
=======================

[ Bit Counting ]


Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

Example: 

The binary representation of 1234 is 10011010010, so the function should return 5 in this case



=====================
===== Solution ===== 
=====================
 */


function countBits($n)
{
    $binary = decbin($n);
    $count = 0;
    for ($i = 0; $i < strlen($binary); $i++) {
        if ($binary[$i] == 1) {
            $count++;
        }
    }
    return $count;
}

/*
==========================
===== Other Solution ===== 
==========================

function countBits(int $n):int 
    {
        return substr_count(decbin($n), '1');
    }

 */


/**
 * Output
 */

echo countBits(0) . "<>";  // 0
echo countBits(4) . "<>";  // 1
echo countBits(7) . "<>";  // 3
echo countBits(9) . "<>";  // 2
echo countBits(10) . "<>"; // 2
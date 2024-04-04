<?php

/*

=======================
=== Problem Solving === 
=======================

[ Sub-array elements sum ]


Given an array (or list or vector) of arrays (or, guess what, lists or vectors) of integers, your goal is to return the sum of a specific set of numbers, starting with elements whose position is equal to the main array length and going down by one at each step.

Say for example the parent array (etc, etc) has 3 sub-arrays inside: you should consider the third element of the first sub-array, the second of the second array and the first element in the third one: [[3, 2, 1, 0], [4, 6, 5, 3, 2], [9, 8, 7, 4]] would have you considering 1 for [3, 2, 1, 0], 6 for [4, 6, 5, 3, 2] and 9 for [9, 8, 7, 4], which sums up to 16.

One small note is that not always each sub-array will have enough elements, in which case you should then use a default value (if provided) or 0 (if not provided), as shown in the test cases.





====================
===== Solution ===== 
====================
 */


function elementsSum($arr, $d = 0)
{
    $result = 0;

    if (count($arr[0]) >= 3) {
        $result += $arr[0][2];
    } elseif (count($arr[1]) >= 2) {
        $result += $arr[1][1];
    } elseif (count($arr[2]) >= 1) {
        $result += $arr[2][0];
    }
    if ($d > 0) {
        $result += $d;
    }

    return $result;
}

/*
==========================
===== Solution Other ===== 
==========================

function elementsSum($arr, $d = 0)
{
    $result = 0;
    $count_array = count($arr);
    for ($i = 0; $i < $count_array; $i++) 
    {
        $index_count = $count_array - 1 - $i;

        if (count($arr[$i]) > $index_count) 
        {
            $result += $arr[$i][$index_count];
        }else{
            $result += $d;
        }
    }
    return $result;
}
 */


/**
 * Output
 */

echo elementsSum([[3, 2, 1, 0], [4, 6, 5, 3, 2], [9, 8, 7, 4]]) . "<br>"; // 16
echo elementsSum([[3], [4, 6, 5, 3, 2], [9, 8, 7, 4]]) . "<br>"; // 15
echo elementsSum([[3, 2, 1, 0], [4, 6, 5, 3, 2], []]) . "<br>"; // 7
echo elementsSum([[3, 2, 1, 0], [4, 6, 5, 3, 2], []], 5) . "<br>"; // 12
echo elementsSum([[3, 2], [4], []]) . "<br>"; // 0
<?php

/*

=======================
=== Problem Solving === 
=======================

[ Find_Count_of_Most_Frequent_Item_in_an_Array ]


Complete the function to find the count of the most frequent item of an array.
You can assume that input is an array of integers. For an empty array return 0

Example

input array: [3, -1, -1, -1, 2, 3, -1, 3, -1, 2, 4, 9, 3]
output: 5 

The most frequent number in the array is -1 and it occurs 5 times.



=====================
===== Solution ===== 
=====================
 */
function mostFrequentItemCount(array $arr): int
{
    $result = [];

    for ($i = 0; $i < count($arr); $i++) {
        if (isset($result[$arr[$i]])) {
            $result[$arr[$i]]++;
        } else {
            $result[$arr[$i]] = 1;
        }
    }
    return max($result);
}



/*
======================================
===== Solution [ Best Practice ] ===== 
======================================
 */
// function mostFrequentItemCount(array $collection): int
// {
//     $result = 0;
//     for ($i = 0; $i < count($collection); $i++) {
//         $count = 0;

//         for ($a = 0; $a < count($collection); $a++) {
//             if ($collection[$i] == $collection[$a]) {
//                 $count++;
//             }
//         }

//         if ($count > $result) {
//             $result = $count;
//         }
//     }
//     return $result;
// }


/**
 * Output
 */
echo mostFrequentItemCount([3, -1, -1]) . "<br>"; //2
echo mostFrequentItemCount([3, -1, -1, -1, 2, 3, -1, 3, -1, 2, 4, 9, 3]) . "<br>"; // 5
<?php



/*

=======================
=== Problem Solving === 
=======================

[ Array.diff ]

Your goal in this kata is to implement a difference function, 
which subtracts one list from another and returns the result.

It should remove all values from list a, 
which are present in list b keeping their order.

arrayDiff([1,2],[1]) == [2]

If a value is present in b, all of its occurrences must be removed from the other:

arrayDiff([1,2,2,2,3],[2]) == [1,3]



==================================
===== Solution ===== Time: 463ms 
==================================
 */


function arrayDiff($a, $b)
{
    $result = [];
    if (empty($a) || empty($b)) {
        return $a;
    }
    for ($i = 0; $i < count($a); $i++) {
        if (!in_array($a[$i], $b)) {
            $result[] = $a[$i];
        }
    }
    return $result;
}



/**
 * Output
 */


echo "<pre>";
print_r(arrayDiff([1, 2], [1])); //[2], , "a was [1,2], b was [1], expected [2]");
print_r(arrayDiff([1, 2, 2], [1])); //[2, 2], , "a was [1,2,2], b was [1], expected [2,2]");
print_r(arrayDiff([1, 2, 2], [2])); //[1], , "a was [1,2,2], b was [2], expected [1]");
print_r(arrayDiff([1, 2, 2], [])); //[1, 2, 2], , "a was [1,2,2], b was [], expected [1,2,2]");
print_r(arrayDiff([], [1, 2])); //[], , "a was [], b was [1,2], expected []");
print_r(arrayDiff([1, 2, 3], [1, 2])); //[3], , "a was [1, 2, 3], b was [1,2], expected [3]");

// print_r(moveZeros()); // 
echo "</pre>";

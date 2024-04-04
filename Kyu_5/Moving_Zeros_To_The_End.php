<?php


/*

=======================
=== Problem Solving === 
=======================

[ Moving Zeros To The End ]


Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.

moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]



==================================
===== Solution ===== Time:  493ms 
==================================
 */


function moveZeros(array $items): array
{
    $zeros = [];
    $mixed = [];

    for ($i = 0; $i < count($items); $i++) {

        if ($items[$i]  ===  0 || $items[$i]  ===  0.0) {
            $zeros[] = (int)$items[$i];
        } else {
            $mixed[] = $items[$i];
        }
    }
    array_push($mixed, ...$zeros);
    return $mixed;
}

/**
 * Output
 */

echo "<pre>";

print_r(moveZeros([1, 2, 0, 1, 0, 1, 0, 3, 0, 1])); //[1, 2, 1, 1, 3, 1, 0, 0, 0, 0],
print_r(moveZeros([9, 0.0, 0, 9, 1, 2, 0, 1, 0, 1, 0.0, 3, 0, 1, 9, 0, 0, 0, 0, 9])); //[9, 9, 1, 2, 1, 1, 3, 1, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
print_r(moveZeros(["a", 0, 0, "b", "c", "d", 0, 1, 0, 1, 0, 3, 0, 1, 9, 0, 0, 0, 0, 9])); //["a", "b", "c", "d", 1, 1, 3, 1, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
print_r(moveZeros(["a", 0, 0, "b", null, "c", "d", 0, 1, false, 0, 1, 0, 3, [], 0, 1, 9, 0, 0, 0, 0, 9])); //["a", "b", null, "c", "d", 1, false, 1, 3, [], 1, 9, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
print_r(moveZeros([0, 1, null, 2, false, 1, 0])); //[1, null, 2, false, 1, 0, 0],
print_r(moveZeros(["a", "b"])); //["a", "b"],
print_r(moveZeros(["a"])); //["a"],
print_r(moveZeros([0, 0])); //[0, 0],
print_r(moveZeros([0])); //[0],
print_r(moveZeros([false])); //[false],
print_r(moveZeros([])); //[],
echo "</pre>";

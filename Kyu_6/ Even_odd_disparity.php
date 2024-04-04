<?php



/*

=======================
=== Problem Solving === 
=======================

[ Even odd disparity ]


Given an array, return the difference between the count of even numbers and the count of odd numbers. 0 will be considered an even number.

------------
For example:
------------

solve([0,1,2,3]) = 0 because there are two even numbers and two odd numbers. Even - Odd = 2 - 2 = 0.  

----------------------------------------------
Let's now add two letters to the last example:
----------------------------------------------

solve([0,1,2,3,'a','b']) = 0. Again, Even - Odd = 2 - 2 = 0. Ignore letters. 

----------------------------------------------------------------
The input will be an array of lowercase letters and numbers only.
-----------------------------------------------------------------

--------------------------------------------------------------------------------
In some languages (Haskell, C++, and others), input will be an array of strings:
--------------------------------------------------------------------------------

solve ["0","1","2","3","a","b"] = 0 



==================================
===== Solution ===== Time:
==================================
 */

function solve(array $a)
{
    $result  = 0;
    $even = 0;
    $odd = 0;
    for ($i = 0; $i < count($a); $i++) {

        if (is_numeric($a[$i])) {
            $int = (int) $a[$i];

            if (($int  % 2) == 0) {
                $even++;
            } else {
                $odd++;
            }
        }
    }
    $result = $even - $odd;
    return $result;
};

/**
 * Output
 */
echo  solve([0, 1, 2, 3]) . "<br>"; //0
echo  solve([0, 1, 2, 3, 'a', 'b']) . "<br>"; // 0
echo  solve([0, 15, 'z', 16, 'm', 13, 14, 'c', 9, 10, 13, 'u', 4, 3]) . "<br>"; // 0
echo  solve([13, 6, 8, 15, 4, 8, 13]) . "<br>"; // 1);
echo  solve([1, 'a', 17, 8, 'e', 3, 'i', 12, 1]) . "<br>"; // -2;
echo  solve([5, 15, 16, 10, 6, 4, 16, 't', 13, 'n', 14, 'k', 'n', 0, 'q', 'd', 7, 9]) . "<br>"; // 2;
echo  solve([]) . "<br>"; // 0;
echo  solve(["0", "1", "2", "3", "a", "b"]) . "<br>"; // 0;

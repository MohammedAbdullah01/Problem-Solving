<?php



/*

=======================
=== Problem Solving === 
=======================

[ Elevator Distance ]



Imagine you start on the 5th floor of a building, then travel down to the 2nd floor, then back up to the 8th floor. You have travelled a total of 3 + 6 = 9 floors of distance.

Given an array representing a series of floors you must reach by elevator, return an integer representing the total distance travelled for visiting each floor in the array in order.

// simple examples
elevatorDistance([5,2,8]) = 9
elevatorDistance([1,2,3]) = 2
elevatorDistance([7,1,7,1]) = 18

// if two consecutive floors are the same,
//distance travelled between them is 0
elevatorDistance([3,3]) = 0

Array will always contain at least 2 floors. Random tests will contain 2-20 elements in array, and floor values between 0 and 30.



====================
===== Solution ===== 
====================
 */
function elevatorDistance(array $arr): int
{
    $result = 0;
    $counter = 1;

    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] < $arr[$counter]) {
            $result += $arr[$counter] - $arr[$i];
        } else {
            $result += $arr[$i] - $arr[$counter];
        }

        $counter++;
    }
    return (int) $result;
}



/**
 * Output
 */
echo elevatorDistance([5, 2, 8]) . "<br>"; //9
echo elevatorDistance([1, 2, 3]) . "<br>"; // 2
echo elevatorDistance([7, 1, 7, 1]) . "<br>"; // 18
echo elevatorDistance([3, 3]) . "<br>"; // 0
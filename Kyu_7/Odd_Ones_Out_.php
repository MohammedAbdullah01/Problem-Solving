
<?php
/*

=======================
=== Problem Solving === 
=======================

[ Odd_Ones_Out ]

The town sheriff dislikes odd numbers and wants all odd numbered families out of town! In town 
crowds can form and individuals are often mixed with other people and families. However you can distinguish the 
family they belong to by the number on the shirts they wear. As the sheriff's assistant it's your job to find all 
the odd numbered families and remove them from the town!

Challenge: You are given a list of numbers. The numbers each repeat a certain number of times. 
Remove all numbers that repeat an odd number of times while keeping everything else the same.

oddOnesOut([1, 2, 3, 1, 3, 3]) = [1, 1]

In the above example:

    the number 1 appears twice
    the number 2 appears once
    the number 3 appears three times

2 and 3 both appear an odd number of times, so they are removed from the list. The final result is: [1,1]

Here are more examples:

oddOnesOut([1, 1, 2, 2, 3, 3, 3]) = [1, 1, 2, 2]
oddOnesOut([26, 23, 24, 17, 23, 24, 23, 26]) = [26, 24, 24, 26]
oddOnesOut([1, 2, 3]) = []
oddOnesOut([1]) = []

==================================================
===== Solution 1 not used built in function  ===== 
==================================================
 */


function  oddOnesOut($numbers)
{
    $count_value = [];

    for ($i = 0; $i < count($numbers); $i++) {
        if (isset($count_value[$numbers[$i]])) {
            $count_value[$numbers[$i]]++;
        } else {
            $count_value[$numbers[$i]] = 1;
        }
    }

    $filtered_numbers = custom_array_filter($numbers, function ($num) use ($count_value) {
        if ($count_value[$num] % 2 == 0) {
            return $count_value[$num];
        }
    });

    return $filtered_numbers;
}


function custom_array_filter($array, $callback = null)
{
    $filtered_array = array();

    foreach ($array as $key => $value) {
        // If no callback is provided, use a default callback that removes empty elements
        if ($callback === null) {
            if (!empty($value)) {
                $filtered_array[$key] = $value;
            }
        } else {
            // If a callback is provided, use it to determine whether to include the value
            if ($callback($value, $key)) {
                $filtered_array[$key] = $value;
            }
        }
    }

    return $filtered_array;
}






/*
=====================
===== Solution 2 ====
=====================

function odd_ones_out($a)
{
    $av = array_count_values($a);
    $na = [];
    foreach ($a as $value) {
        if ($av[$value] % 2 == 0)
            $na[] = $value;
    }
    return $na;
}
 */



/*
==================================================
===== Solution 3 used built in function  ===== 
==================================================

/*
 function oddOnesOut($numbers) {
    // Count occurrences of each number
    $occurrences = array_count_values($numbers);
    
    // Filter out numbers that appear an even number of times
    $filtered_numbers = array_filter($numbers, function($num) use ($occurrences) {
        return $occurrences[$num] % 2 == 0;
    });
    
    return $filtered_numbers;
}

// Test cases
print_r(oddOnesOut([1, 2, 3, 1, 3, 3])); // Output: [1, 1]
print_r(oddOnesOut([1, 1, 2, 2, 3, 3, 3])); // Output: [1, 1, 2, 2]
print_r(oddOnesOut([26, 23, 24, 17, 23, 24, 23, 26])); // Output: [26, 24, 24, 26]
print_r(oddOnesOut([1, 2, 3])); // Output: []
print_r(oddOnesOut([1])); // Output: []
 */
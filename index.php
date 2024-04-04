<!-- // very very heard Problem Solving
////////////////////////////// chooseBestSum ////////////////////// -->


<?php



/*

=======================
=== Problem Solving === 
=======================

[ Don't give me five! ]

==================================
===== Solution ===== Time:
==================================
 */

// function solve($str)
// {
//     // Step 1: Separate the string into an array of characters
//     $chars = str_split($str);

//     // Step 2: Store the positions of the spaces
//     $space_positions = [];
//     foreach ($chars as $key => $char) {
//         if ($char === ' ') {
//             $space_positions[] = $key;
//         }
//     }

//     // // Step 3: Remove the spaces from the array
//     $chars = array_filter($chars, function ($char) {
//         return $char !== ' ';
//     });

//     // // Step 4: Reverse the array
//     $chars = array_reverse($chars);

//     // // Step 5: Insert the spaces back into their original positions
//     foreach ($space_positions as $position) {
//         array_splice($chars, $position, 0, ' ');
//     }

//     // Step 6: Join the array into a string
//     return implode('', $chars);
// }




// /**
//  * Output
//  */
// // echo "";

// //var_dump(is_numeric("20mo"));

// // echo "<pre>";
// // print_r(solve('your code rocks')); // 

// // echo "</pre>";

// echo solve('codewars') . "<br>"; //'srawedoc'
// echo solve('your code') . "<br>"; //'edoc ruoy'
// echo solve('your code rocks') . "<br>"; //'skco redo cruoy'
// echo solve('i love codewars') . "<br>"; //s rawe docevoli'

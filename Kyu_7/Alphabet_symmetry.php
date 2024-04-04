<?php



/*

=======================
=== Problem Solving === 
=======================

[ Alphabet symmetry ]



Consider the word "abode". We can see that the letter a is in position 1 and b is in position 2. In the alphabet, a and b are also in positions 1 and 2. Notice also that d and e in abode occupy the positions they would occupy in the alphabet, which are positions 4 and 5.

Given an array of words, return an array of the number of letters that occupy their positions in the alphabet for each word. For example,

solve(["abode","ABc","xyzD"]) = [4, 3, 1]

See test cases for more examples.

Input will consist of alphabet characters, both uppercase and lowercase. No spaces.

Good luck!

If you like this Kata, please try:

Last digit symmetry

Alternate capitalization



==================================
===== Solution ===== Time:
==================================
 */

function solve(array $arr): array
{
    $sum_letters_alphabet = [];
    $result = [];

    // for ($i = 0; $i < count($arr); $i++) {

    foreach ($arr as $word) {
    }
    for ($a = 0; $a < strlen($word); $a++) {


        if ((ord(strtolower($word[$a])) - 97) == strpos($word, $word[$a], $a)) {
            $sum_letters_alphabet[]++;
        }
    }

    //The total number of letters arranged in the alphabet
    $result[] = array_sum($sum_letters_alphabet);
    $sum_letters_alphabet = [];
    // }

    return $result;
}


/**
 * Output
 */
echo "<pre>";
print_r(solve(["abode", "ABc", "xyzD"]));   //[4, 3, 1]
print_r(solve(["abide", "ABc", "xyz"]));   //[4, 3, 0]
print_r(solve(["IAMDEFANDJKL", "thedefgh", "xyzDEFghijabc"]));   //[6, 5, 7]
print_r(solve(["encode", "abc", "xyzD", "ABmD"]));   //[1, 3, 1, 3]
print_r(solve([]));   //[]
echo "</pre>";

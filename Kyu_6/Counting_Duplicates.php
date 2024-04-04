<?php



/*

=======================
=== Problem Solving === 
=======================

[ Counting Duplicates ]


Count the number of Duplicates

Write a function that will return the count of distinct case-insensitive 
alphabetic characters and numeric digits that occur more than once in the 
input string. The input string can be assumed to contain only alphabets (
both uppercase and lowercase) and numeric digits.

Example

"abcde" -> 0 # no characters repeats more than once
"aabbcde" -> 2 # 'a' and 'b'
"aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
"indivisibility" -> 1 # 'i' occurs six times
"Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
"aA11" -> 2 # 'a' and '1'
"ABBA" -> 2 # 'A' and 'B' each occur twice


==================================
===== Solution ===== Time:
==================================
 */


function duplicateCount(string $text): int
{
    $counter = 0;

    for ($i = 0; $i < strlen($text); $i++) {

        if ($text[$i] == "*") {
            continue;
        }

        $newText = str_ireplace($text[$i], "*", $text, $count);

        if ($count > 1) {
            $text = $newText;
            $counter++;
        }
    }

    return $counter;
}



/**
 * Output
 */

echo duplicateCount("") . "<br>"; //0, 
echo duplicateCount("abcde") . "<br>"; //0, 
echo duplicateCount("aabbcde") . "<br>"; //2, 
echo duplicateCount("aabBcde") . "<br>"; //2, 
echo duplicateCount("Indivisibility") . "<br>"; //1, 
echo duplicateCount("Indivisibilities") . "<br>"; //2, 



/*
==========================
===== Other Solution ===== 
==========================
function duplicateCount($text) : int {

    $stats = array_count_values(str_split(strtolower($text)));
    return count(array_filter($stats, function($value) {return $value > 1;} ));

}
 */

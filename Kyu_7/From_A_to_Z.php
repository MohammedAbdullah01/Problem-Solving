<?php


/*

=======================
=== Problem Solving === 
=======================

[ From A to Z ]

Given a string indicating a range of letters, return a string which includes all the letters in that range, including the last letter.
Note that if the range is given in capital letters, return the string in capitals also!
Examples

"a-z" ➞ "abcdefghijklmnopqrstuvwxyz"
"h-o" ➞ "hijklmno"
"Q-Z" ➞ "QRSTUVWXYZ"
"J-J" ➞ "J"

Notes

    A hyphen will separate the two letters in the string.
    You don't need to worry about error handling in this kata (i.e. both letters will be the same case and the second letter 
    will not be before the first alphabetically).




====================
===== Solution ===== 
====================
 */

function gimme_the_letters(string $str): string
{
    $first_char = ord($str[0]);
    $secund_char = ord($str[2]);

    $result = "";

    for ($i = $first_char; $i <= $secund_char; $i++) {
        $result .= chr($i);
    }
    return $result;
}


/**
 * Output
 */


echo gimme_the_letters("a-z") . "<br>"; // "abcdefghijklmnopqrstuvwxyz"
echo gimme_the_letters("h-o") . "<br>"; // "hijklmno"
echo gimme_the_letters("Q-Z") . "<br>"; // "QRSTUVWXYZ"
echo gimme_the_letters("J-J") . "<br>"; // "J"
echo gimme_the_letters("a-b") . "<br>"; // "ab"
echo gimme_the_letters("A-A") . "<br>"; // "A"
echo gimme_the_letters("g-i") . "<br>"; // "ghi"
echo gimme_the_letters("H-I") . "<br>"; // "HI"
echo gimme_the_letters("y-z") . "<br>"; // "yz"
echo gimme_the_letters("e-k") . "<br>"; // "efghijk"
echo gimme_the_letters("a-q") . "<br>"; // "abcdefghijklmnopq"
echo gimme_the_letters("F-O") . "<br>"; // "FGHIJKLMNO")  

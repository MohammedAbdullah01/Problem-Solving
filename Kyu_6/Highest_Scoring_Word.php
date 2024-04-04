<?php


/*

===========================
=== Problem Solving (1) === 
===========================

[ Highest Scoring Word ]

Given a string of words, you need to find the highest scoring word.

Each letter of a word scores points according to its position in the alphabet: a = 1, b = 2, c = 3 etc.

For example, the score of abad is 8 (1 + 2 + 1 + 4).

You need to return the highest scoring word as a string.

If two words score the same, return the word that appears earliest in the original string.

All letters will be lowercase and all inputs will be valid.


====================
===== Solution ===== Time: 514ms 
====================
 */


function high($x)
{
    $words = explode(" ", $x);
    $sum_word = [];

    foreach ($words as $word) {
        $sum_word[$word] = calculateScore($word);
    }

    arsort($sum_word);
    $first_value = array_key_first($sum_word);
    return $first_value;
}


function calculateScore($word)
{
    $score = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        $score += ord($word[$i]) - ord('a') + 1;
    }
    return $score;
}



/**
 * Output
 */

echo high('man i need a taxi up to ubud') . "<br>"; // Output:'taxi'
echo high('what time are we climbing up the volcano') . "<br>"; // Output:'volcano'
echo high('take me to semynak') . "<br>"; // Output:'semynak'

echo high('aa b') . "<br>"; // Output:'aa'
echo high('b aa') . "<br>"; // Output:'b'
echo high('bb d') . "<br>"; // Output:'bb'
echo high('d bb') . "<br>"; // Output:'d'
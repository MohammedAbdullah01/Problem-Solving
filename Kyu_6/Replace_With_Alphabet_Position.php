<?php



/*

=======================
=== Problem Solving === 
=======================

[ Replace With Alphabet Position ]


In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.
Example

alphabet_position("The sunset sets at twelve o' clock.")

Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" ( as a string )


==================================
===== Solution ===== Time:1449ms 
==================================
 */


function alphabet_position(string $s): string
{
    $s = strtolower($s);
    $letters = [];
    $count = 1;
    $result = "";
    for ($i = ord("a"); $i <= ord("z"); $i++) {
        $letters[$count++] = chr($i);
    }
    for ($c = 0; $c < strlen($s); $c++) {
        if (in_array($s[$c], $letters)) {
            $result .= array_search($s[$c], $letters, true) . " ";
        }
    }
    return trim($result);
}


/**
 * Output
 */
echo alphabet_position('The sunset sets at twelve o\' clock.') . "<br>"; // '20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11';
echo alphabet_position('The narwhal bacons at midnight.') . "<br>"; // '20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20';
echo alphabet_position(''); // '';



/*
=====================
===== Other Solution 
=====================

function alphabet_position(string $s): string {
    
    $result = [];
    
    for ($i = 0; $i < strlen($s); $i++) {

        if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
        $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
        }
    }
    
    return join(' ', $result);
}
 */
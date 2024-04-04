<?php

/*

===========================
=== Problem Solving (1) === 
===========================

[ Split Strings ]

Description:

Complete the solution so that it splits the string into pairs of two characters. 
If the string contains an odd number of characters then it should replace the 
missing second character of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']

====================
===== Solution =====
====================

function solution($str)
{
    $twoLetters = [];
    $length  = strlen($str);
    for ($i = 0; $i < $length; $i += 2) {
        $result = substr($str, $i, 2);
        if (strlen($result) < 2) {
            $result .= "_";
        }
        array_push($twoLetters, $result);
    }
    return $twoLetters;
}

 */
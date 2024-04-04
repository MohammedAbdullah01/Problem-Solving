<?php



/*

=======================
=== Problem Solving === 
=======================

[ The Hashtag Generator ]

The marketing team is spending way too much time typing in hashtags.
Let's help them with our own Hashtag Generator!

Here's the deal:

    It must start with a hashtag (#).
    All words must have their first letter capitalized.
    If the final result is longer than 140 chars it must return false.
    If the input or the result is an empty string it must return false.

Examples

" Hello there thanks for trying my Kata"  =>  "#HelloThereThanksForTryingMyKata"
"    Hello     World   "                  =>  "#HelloWorld"
""                                        =>  false



=======================
===== Solution ===== 
=======================
 */
function generateHashtag(string $str): mixed
{
    $str = trim($str);
    $result = "";

    $words = explode(" ", $str);

    if (($words[0] == "") || (strlen($words[0]) >= 140)) {
        return false;
    }

    $map = array_map(function ($word) {
        return ucfirst($word);
    }, $words);

    $result = "#" . join("", $map);

    return $result;
}

/*
================================
===== Solution 2 (Cleaver) ===== 
================================

function generateHashtag(string $str): mixed
{
    $str = '#' . str_replace(' ', '', ucwords($str));

    return (strlen($str) > 140 || strlen($str) == 1) ? false : $str;
}
 */


/**
 * Output
 */

var_dump(generateHashtag('')) . "<br>"; // false, 

var_dump(generateHashtag(str_repeat(' ', 200))) . "<br>"; // false, 

echo generateHashtag('Codewars') . "<br>"; // '#Codewars', 

echo generateHashtag('Codewars      ') . "<br>"; // '#Codewars', 

echo generateHashtag('Codewars Is Nice') . "<br>"; // '#CodewarsIsNice', 

echo generateHashtag('codewars is nice') . "<br>"; // '#CodewarsIsNice', 

echo generateHashtag('Code' . str_repeat(' ', 140) . 'wars') . "<br>"; // '#CodeWars', 

echo generateHashtag('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat') . "<br>"; // false, 

echo generateHashtag(str_repeat("a", 139)) . "<br>"; // "#A" . str_repeat("a", 138), 

echo generateHashtag(str_repeat("a", 140)) . "<br>"; // false, 
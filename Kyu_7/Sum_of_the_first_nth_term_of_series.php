<?php

/*

========================
=== Problem Solving  === 
========================

[ Sum of the first nth term of Series ]

Task:

Your task is to write a function which returns the sum of following series upto nth term(parameter).

Series: 1 + 1/4 + 1/7 + 1/10 + 1/13 + 1/16 +...

Rules:

    You need to round the answer to 2 decimal places and return it as String.

    If the given value is 0 then it should return 0.00

    You will only be given Natural Numbers as arguments.

Examples:(Input --> Output)

1 --> 1 --> "1.00"
2 --> 1 + 1/4 --> "1.25"
5 --> 1 + 1/4 + 1/7 + 1/10 + 1/13 --> "1.57"



=====================================
===== Solution ===== Time: 503ms ====
=====================================

function series_sum($n)
{
    $n = (int) filter_var($n, FILTER_SANITIZE_NUMBER_INT);
    $result = 0;

    for ($i = 0; $i < $n; $i++) {
        $calculation = 1 / (1 + $i * 3);
        $result +=  $calculation;
    }
    $number_formatted = number_format($result, 2);
    return $number_formatted;
}

    echo series_sum(1); // 1.00
    echo series_sum(2); // 1.25
    echo series_sum(3); // 1.39
    echo series_sum(4); // 1.49

 */

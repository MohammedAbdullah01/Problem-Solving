<?php
/*

==============================================
=== Implementation Function Already In Php ===
==============================================

[ array_count_value() ]


====================
===== Solution ===== 
=====================

*/


function customize_array_count_values(array $array): array
{
    $counts = [];

    foreach ($array as $value) {
        if (isset($counts[$value])) {
            $counts[$value]++;
        } else {
            $counts[$value] = 1;
        }
    }
    return $counts;
}



/**
 * Output
 */

// echo repeats([4, 5, 7, 5, 4, 8]) . "<br>"; // 15
// echo repeats([9, 10, 19, 13, 19, 13]) . "<br>"; // 19
// echo repeats([16, 0, 11, 4, 8, 16, 0, 11]) . "<br>"; // 12
// echo repeats([5, 17, 18, 11, 13, 18, 11, 13]) . "<br>"; // 22
// echo repeats([5, 10, 19, 13, 10, 13]) . "<br>"; // 24


echo "<pre>";
print_r(repeats([4, 5, 7, 5, 4, 8]));
echo "</pre>";

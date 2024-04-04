<?php



/*

=======================
=== Problem Solving === 
=======================

[ sort_numbers]




==================================
===== Solution ===== Time:
==================================
 */
function sort_number(array $array)
{
    for ($i = 0; $i < count($array); $i++) {
        $index = $i;

        for ($a = $i + 1; $a < count($array); $a++) {
            if ($array[$a] < $array[$index]) {
                $index = $a;
            }
        }

        $temp = $array[$index]; // 3
        $array[$index] = $array[$i];
        $array[$i] = $temp;
    }
    return $array;
}

/**
 * Output
 */
echo "<pre>";
print_r(sort_number([3, -6, 10, 4, 9, -1, 0])); // [-6, -1, 0, 3, 4, 9, 10]);
echo "</pre>";

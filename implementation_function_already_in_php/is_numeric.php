<?php

/*

==============================================
=== Implementation Function Already In Php ===
==============================================

[ is_numeric() ]


====================
===== Solution ===== 
=====================

*/

function is_num($n)
{
    $result = false;

    if (is_int($n)) {
        $result = true;
    }

    if (is_string($n)) {

        for ($i = 0; $i < strlen($n); $i++) {

            if ((ord($n[$i]) >= 48) && (ord($n[$i] <= 57))) {

                $result = true;
            } else {
                $result = false;
                break;
            }
        }
    }
    return $result;
}



/**
 * Output
 */

echo is_num(2) . "<br>"; // 1 || true; 
echo is_num("0") . "<br>"; // 1 || true; 
echo is_num("112gfgfgfgfg2f") . "<br>"; // 0 || false;

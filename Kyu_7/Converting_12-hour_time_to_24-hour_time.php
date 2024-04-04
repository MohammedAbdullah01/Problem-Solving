<?php



/*

=======================
=== Problem Solving === 
=======================

[ Converting 12-hour time to 24-hour time ]


Converting a 12-hour time like "8:30 am" or "8:30 pm" to 24-hour time (like "0830" or "2030") sounds easy enough, right? Well, 
let's see if you can do it!

You will have to define a function, which will be given an hour (always in the range of 1 to 12, inclusive), a minute (always in 
the range of 0 to 59, inclusive), and a period (either a.m. or p.m.) as input.

Your task is to return a four-digit string that encodes that time in 24-hour time.
Notes

    By convention, noon is 12:00 pm, and midnight is 12:00 am.
    On 12-hours clock, there is no 0 hour, and time just after midnight is denoted as, for example, 12:15 am. On 24-hour clock, this translates to 0015.



==================================
===== Solution ===== Time:
==================================
 */


function to24hourtime(int $hour, int $minute, string $period): string
{

    $hour = ($hour <= 9) ? "0$hour" : $hour;
    $minute = ($minute <= 9) ? "0$minute" : $minute;
    if (($hour == 12) && ($period == "am")) {
        $hour = "00";
    } elseif (($hour == 12) && ($period == "pm")) {
        $hour = $hour;
    } elseif (($hour < 12) && ($period == "am")) {
        $hour = $hour;
    } else {
        $hour  += 12;
    }
    return $hour . $minute;
}

/**
 * Output
 */
echo to24hourtime(1, 0, 'pm') . "<br>"; // 'Input =  1:00 pm') // '1300', ;
echo to24hourtime(1, 0, 'am') . "<br>"; // 'Input =  1:00 am') // '1300', ;
echo to24hourtime(9, 45, 'pm') . "<br>"; // 'Input =  9:45 pm') // '2145', ;
echo to24hourtime(12,  0, 'am') . "<br>"; // 'Input =  12:00 am') // '0000', ;
echo to24hourtime(12,  0, 'pm') . "<br>"; // 'Input =  12:00 pm') // '1200', ;
echo to24hourtime(6, 30, 'am') . "<br>";// 'Input =  6:30 am') // '0630' ;
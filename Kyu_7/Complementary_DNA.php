<?php

/*

========================
=== Problem Solving  === 
========================

[ Complementary DNA ]

Description:

Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.

If you want to know more: http://en.wikipedia.org/wiki/DNA

In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". Your function receives one side of the DNA (string, except for Haskell); you need to return the other complementary side. DNA strand is never empty or there is no DNA at all (again, except for Haskell).

More similar exercise are found here: http://rosalind.info/problems/list-view/ (source)

Example: (input --> output)

"ATTGC" --> "TAACG"
"GTAT" --> "CATA"



====================
===== Solution =====
====================

function echo DNA_strand($dna)
{
    $dna = strtoupper($dna);
    $dna_array = ["A" => "T", "G" => "C", "T" => "A", "C" => "G"];

    for ($i = 0; $i < strlen($dna); $i++) {
        if (in_array($dna[$i], array_keys($dna_array))) {
            $dna[$i] = $dna_array[$dna[$i]];
        } else {
            $dna = str_replace($dna[$i], "", $dna);
        }
    }
    return $dna;
}
    echo DNA_strand("TTTT"); // AAAA
    echo DNA_strand("AAAA"); // TTTT
    echo DNA_strand("TAACG"); // ATTGC
    echo DNA_strand("ATTGC"); // TAACG
    echo DNA_strand("CATA"); // GTAT
    echo DNA_strand("GTAT"); // CATA

    */

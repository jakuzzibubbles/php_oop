<?php

function summe_von_array($array) {
    $summe = 0;
    foreach ($array as $zahl) {
        $summe += $zahl;
    }
    return $summe;
}


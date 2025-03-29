<?php

function izracunajPopust($brojevi, $popust) {
    $popusti = [];
    foreach($brojevi as $broj) {
        $rezultat = $broj * ($popust / 100);
        array_push($popusti, $rezultat);
    }
    return $popusti;
}


$brojevi = [250, 330, 1000, 2000, 5000];
$popusti = izracunajPopust($brojevi, 10);
$ukupanPopust = array_sum($popusti);
var_dump($popusti);
echo $ukupanPopust;
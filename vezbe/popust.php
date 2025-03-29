<?php

function izracunajPopust($cena, $popust) {
  $rezultat = $cena * ($popust/100);
  return $rezultat;
}

$obracunatiPopust = izracunajPopust(2000,10);
echo $obracunatiPopust;

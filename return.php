<?php

function pomnozi($broj, $mnozilac) {
  $proizvod = $broj * $mnozilac;
  return $proizvod;
}
// return vraca informaciju koju dobijemo iz funkcije i tu zaustavlja ceo proces
// on daje isto informaciju kao sto bi smo mi setovali na varijablu

$rezultat = pomnozi(3,2);
$rezultat = $rezultat / 2;
echo $rezultat;
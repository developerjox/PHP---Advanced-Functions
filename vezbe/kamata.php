<?php

function izracunajKamatu($kredit, $godina) {
  $kamata = 0;
  if ($godina < 2000) {
    $kamata = 0.05;
  } else if($godina >= 2000 && $godina <= 2000) {
    $kamata = 0.08;
  } else if($godina >= 2011 && $godina <= 2020) {
    $kamata = 0.1;
  } else {
    $kamata = 0.14;
  }
  return $kredit * $kamata;
}

$kredit = izracunajKamatu(10000,1999);
echo $kredit;
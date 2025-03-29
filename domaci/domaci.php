<?php


function izracunajDostavu($cena, $mesto) {
  $cenaPostarine = 0;
  $dostava = [
    "Subotica" => 220,
    "Pancevo" => 10,
    "Sarajevo" => 292,
    "Split" => 799
  ];  
  $gradPostoji = array_key_exists($mesto, $dostava);
  if($gradPostoji == true) {
      $kilometraza = $dostava[$mesto];
      if($kilometraza <= 100) {
        $cenaPostarine = 200;
      } else if ($kilometraza > 100 && $kilometraza <= 200 ) {
        $cenaPostarine = 350;
      } else {
        $cenaPostarine = 500;
      }    
  } else {
    $cenaPostarine = null;
  }

  return $cenaPostarine;
}


$cenaPostarine = izracunajDostavu(2000, "Subotica");

echo "Rastojanje Subotica - Beograd je 220km, a dostava je $cenaPostarine din";


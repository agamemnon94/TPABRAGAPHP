<?php

// Fonction convertion unités températures
function convertCelsius($unit, $temp)
{
  if ($unit == "fah") {
    $resultat = ($temp * 9 / 5) + 32;
    return $resultat . " °F";
  } elseif ($unit == "kel") {
    $resultat = $temp + 273.15;
    return $resultat . " °K";
  } else {
    return 0;
  }
}

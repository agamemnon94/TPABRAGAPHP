<?php


function convertCelsius($unit)
{
  if ($unit == "fah") {
    $resultat = ($unit * (9 / 5) + 32) . " °F";
    return $resultat;
  } elseif ($unit == "kel") {
    $resultat = ($unit + 273.15) / " °K";
    return $resultat;
  } else {
    return 0;
  }
}

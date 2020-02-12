<?php

$arr = ["Citizen of Glass" => 4.50, "Night" => 9.00, "New Eyes" => 5.00, "Strange Trails" => 10.00];
echo "Het albumoverzicht:".PHP_EOL;

foreach($arr as $yeet => $ja){
    echo($yeet . " kost in totaal " . $ja.PHP_EOL);
}

$getal = array_sum($arr);
$average = array_sum($arr) / count($arr);
echo ("Het totaalbedrag van alle albums is €" . $getal .PHP_EOL);
echo ("De gemiddelde prijs van alle albums is €" . $average);
?>
<?php

#This example shows how to encode an associative array into a JSON object:
$mayor = array("Eric Adams"=>0, "Bill de Blasio"=>8, "Michael Bloomberg"=>12, "Rudy Giuliani"=>8, "David Dinkins"=>4, "Ed Koch"=>;
echo json_encode($mayor);

               
#This example shows how to encode an indexed array into a JSON array:
$newyorkmayor = array("Eric Adams", "Bill de Blasio", "Michael Bloomberg", "Rudy Giuliani", "David Dinkins", "Ed Koch");
echo json_encode($newyorkmayor);
?>

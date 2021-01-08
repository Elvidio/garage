<?php

namespace App;

require __DIR__.'/../vendor/autoload.php';


$ferrari = new Marque('Ferrari');
$voiture = new Voiture('Ferrari v5');

dump($ferrari);
dump($voiture);

// Format attendu de la facture du panier

// $facture = [
//    "Peugeot 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
//    505,
// ];

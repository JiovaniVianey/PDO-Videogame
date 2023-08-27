<?php

// TODO #1 créer un objet PDO permettant de se connecter à la base de données "videogame"
// et le stocker dans la variable $pdo
// --- START OF YOUR CODE ---


$dsn = "mysql:dbname=videogame;host=localhost;charset=UTF8";

$pdo = new PDO( $dsn, "explorateur", "Ereul9Aeng", [ 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING 
  ] );

// --- END OF YOUR CODE ---

<?php

require_once __DIR__ . '/bootstrap.php';

if (APP_DEBUG) debug($_SESSION);

// la constante __DIR__ permet un point d'optimisation
// en effet l'accès est direct PHP ne cherche pas dans un dossier relativement à une adresse
// donc si il n'y a pas de recherche mais un chemin absolu nous faisons l'économie de la recherche relative

include __DIR__ . '/views/index.php';

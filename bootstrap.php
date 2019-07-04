<?php
session_start();

define('APP_DEBUG', false);
define('APP_TITLE', 'Example forms valid');

// la constante __DIR__ calculera le chemin à partir de l'emplacement du fichier bootstrap
// c'est donc plus portable
require_once __DIR__ . '/utils/utils.php';

if(APP_DEBUG) debug( __DIR__ );
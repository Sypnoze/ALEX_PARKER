<?php
session_start();
// Initialisation

// 1 Charger les params

require_once '../app/config/params.php';
// 2 charger la connexion
require_once '../core/connection.php';

// 3 charger l'helpers
require_once '../core/helpers.php';

// 4 charger les constantes 
require_once '../core/constantes.php';

<?php

function monAutoload($nomClasse) {
    $cheminFichier = __DIR__ . '/' . $nomClasse . '.php';
    if (file_exists($cheminFichier)) {
        require_once $cheminFichier;
    }
}

// Enregistrez l'autoload
spl_autoload_register('monAutoload');

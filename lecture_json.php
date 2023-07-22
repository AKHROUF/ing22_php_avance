<?php
    $tab = json_decode(file_get_contents(__DIR__.'/data.json'));
    foreach($tab as $etudiant) {
        echo "<li>$etudiant->id - $etudiant->nom</li>";
    }
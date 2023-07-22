<?php

    $xml = simplexml_load_file('videotheque.xml'); // pointe directement sur la balise racine
    foreach($xml->magasin as $magasin) {
        echo "NOM : " . $magasin->nom . "<br/>";
        echo "ADRESSE : " . $magasin->adresse . "<br/>";
        foreach ($magasin->cassette as $c) {
            echo "<li>" . $c['id'] ." - $c->dateService</li>";
        }
        echo "<hr>";
    }
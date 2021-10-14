<!--
    Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

    $class = [
        [
            "name" => "Paolo",
            "lastname" => "Gualtieri",
            "grades" => [6,4,2,7,8,7]
        ],
        [
            "name" => "Susanna",
            "lastname" => "Pappalato",
            "grades" => [2,3,9,4,7,10]
        ],
        [
            "name" => "Giuseppe",
            "lastname" => "Giunta",
            "grades" => [2,5,5,5,7,6]
        ],
        [
            "name" => "Luca",
            "lastname" => "Rossi",
            "grades" => [10,8,9,8,7,8]
        ],
        [
            "name" => "Sofia",
            "lastname" => "Agnelli",
            "grades" => [6,5,7,8,5,6]
        ],
    ];

    foreach($class as $student) {
        $somma = 0;

        foreach($student["grades"] as $key) {
            $somma += $key;
            $media = $somma  / count($student["grades"]);
        }
        echo "<h4>" . $student["name"] . " " . $student["lastname"] . " -media: " . number_format($media, 1) ."</h4>" ;
    }
?>
<!-- 
    Creare un array con 15 numeri casuali ( da 1 a 100), 
    tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta 
-->

<?php
    $array = [];

    for($i = 0; $i < 15; $i++) {
        $new_number = rand(1, 100);

        if(in_array($new_number, $array) == false) {
            $array[] = $new_number;
        }
    }

    var_dump($array);
?>
<!-- 
    Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
    Stampare tutti i nostri hotel con tutti i dati disponibili.
    Avremo un file PHP con il nostro “database” e un file con tutta la logica.

    -------------------------------------------------------------------------

    Attraverso un parametro GET da inserire direttamente nell’url (uno alla volta), 
    filtrare gli hotel che hanno un parcheggio, numero minimo di stelle o massima lontananza dal centro.
    Se non c’è un filtro, visualizzare come in precedenza tutti gli hotel
-->

<?php   
    include "server.php";
    
    if(isset($_GET["parcheggio"])) {

        $filtered_hotels = [];

        foreach($hotels as $hotel) {
            ($hotel["parking"] ? array_push($filtered_hotels, $hotel) : null);
        }

    } elseif(isset($_GET["stelle"])) {
        
        $stelle = $_GET["stelle"];

        $filtered_hotels = [];

        foreach($hotels as $hotel) {
            ($hotel["vote"] >= $stelle ? array_push($filtered_hotels, $hotel) : null);
        }

    } elseif(isset($_GET["km"])) {
        
        $km = $_GET["km"];

        $filtered_hotels = [];

        foreach($hotels as $hotel) {
            ($hotel["distance_to_center"] <= $km ? array_push($filtered_hotels, $hotel) : null);
        }

    } else {
        $filtered_hotels = $hotels;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_9</title>
</head>
<body>
    <?php 
        foreach($filtered_hotels as $hotel) {
            if($hotel["parking"]) {
                $parcheggio = "Si";
            } else {
                $parcheggio = "No";
            }
            echo $hotel["name"] . "<ul>";
            echo "<li>" . $hotel["description"] . "</li>";
            echo "<li>" . "Parcheggio: " . $parcheggio . "</li>";
            echo "<li>" . "Stelle: " . $hotel["vote"] . "</li>";
            echo "<li>" . "Distanza dal centro: " . $hotel['distance_to_center'] . " km" . "</li>" . "</ul>";
        }
    ?>
</body>
</html>
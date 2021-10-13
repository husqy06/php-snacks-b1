<!--
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
  Ogni array avrà una squadra di casa e una squadra ospite,
  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60
-->

<?php 
    $matches = [
        [
            "homeTeam" => "Lakers",
            "awayTeam" => "Warriors",
            "homeScore" =>  rand(15, 80),
            "awayScore" => rand(15, 80)
        ],
        [
            "homeTeam" => "Chicago Bulls",
            "awayTeam" => "Boston Celtics",
            "homeScore" =>  rand(15, 80),
            "awayScore" => rand(15, 80)
        ],
        [
            "homeTeam" => "Miami Heat",
            "awayTeam" => "Toronto Raptors",
            "homeScore" =>  rand(15, 80),
            "awayScore" => rand(15, 80)
        ],
        [
            "homeTeam" => "Orlando Magic",
            "awayTeam" => "Huston Rockets",
            "homeScore" =>  rand(15, 80),
            "awayScore" => rand(15, 80)
        ],
    ];

    echo "<h1>Ultime partite e risultati:</h1>";
    
    for($i = 0; $i < count($matches); $i++) {
        echo "<h3>" . $matches[$i]["homeTeam"] . " - " . $matches[$i]["awayTeam"] . " | " . $matches[$i]["homeScore"] . "-" . $matches[$i]["awayScore"] . "</h3>";
    }
?>



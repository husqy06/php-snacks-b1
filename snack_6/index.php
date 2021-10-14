<!--
    Utilizzare questo array: https://pastebin.com/CkX3680A. Includerlo in un file database.php... 
    Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
-->

<?php
    include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack_6</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container-gray {
            padding: 30px;
            background-color: gray;
            margin-right: 40px;
        }
        .container-green {
            padding: 30px;
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    
    <?php
        foreach($db as $key => $value) {
            if($key == "teachers") {
                echo "<div class='container-gray'>" . "<h2>Insegnanti:</h2>" ."<ul>";
                foreach($value as $teacher) {
                    echo "<li>" . $teacher["name"] . " " . $teacher["lastname"] . "</li>";
                }
                echo "</ul>" . "</div>";
            }
            else {
                echo "<div class='container-green'>" . "<h2>PM:</h2>" ."<ul>";
                foreach($value as $pm) {
                    echo "<li>" . $pm["name"] . " " . $pm["lastname"] . "</li>";
                }
                echo "</ul>" . "</div>";
            }
        }
    ?>
     
</body>
</html>
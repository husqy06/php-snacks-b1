<!-- 
    Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
    Ad ogni refresh della pagina visualizzare una pubblicità a schermo, 
    tenendo conto che possono essere sorteggiate solo quelle is_active true.
-->
<?php
    include "database.php";
   
    $active_ads = [];

    foreach($ads as $ad) {
        if($ad["is_active"]) {
            $active_ads[] = $ad;
        }
    }

    $current_ad = $active_ads[rand(0, count($active_ads) -1)];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_8</title>

    <style>
        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        img {
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="<?php echo $current_ad["image_path"]; ?>" alt="">
        <h2><a href="<?php echo $current_ad["link"]?>"><?php echo $current_ad["link"]?></a></h2>
    </div>
</body>
</html>
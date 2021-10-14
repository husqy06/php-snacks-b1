<!--
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo.
-->

<?php
    $paragraph ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sapiente, nam quae quo omnis enim temporibus, ullam quos dolorem dolore possimus, odio perferendis vero maxime adipisci tempore quis veniam alias.
                Rem, molestias tempora ab beatae voluptas debitis placeat amet saepe veniam dolore id! Eaque doloribus id expedita fuga autem porro ex deserunt nostrum ullam inventore! Praesentium incidunt rem nostrum error.";
    
    echo "<h2>Paragrafo intero &darr;</h2>";
    echo "<h3>" . $paragraph . "</h3>";

     //controllo quanti punti ci sono;
    
    $stringhe = [];

    do {
        
        $stringhe[] = explode(".", $paragraph);

    } while (explode(".", $paragraph) == false);

    echo "<h2>Paragrafo diviso &darr;</h2>";

    foreach($stringhe as $key => $value){
        foreach($value as $strng) {
            echo "<h3>" . $strng . "<br>" . "</h3>";
        }
    }
 ?>
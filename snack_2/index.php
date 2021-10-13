<!-- 
    Passare come parametri GET name, mail e age e verificare
    (cercando i metodi che non conosciamo nella documentazione) che name
    sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->
<?php 
    $name = $_GET["name"];
    $age = $_GET["age"];
    $email = $_GET["email"];

    if(empty($name) || empty($email) || empty($age)) 
    {
        echo "<h2>ERRORE: inserire un nome, una email e l'età</h2>";
    }
    elseif(strlen($name) <= 3) 
    {
        echo "<h2>ERRORE: inserire un nome valido con più di 3 caratteri</h2>";
    } 
    elseif(is_numeric($age) == false) 
    {
        echo "<h2>ERRORE: inserire un età valida</h2>";
    }
    elseif(strpos($email, "@") == false || strpos($email, ".") == false) 
    {
        echo "<h2>ERRORE: inserire una email valida";
    }
    else { echo "<h2>Compilato Correttamente</h2>"; }
?>
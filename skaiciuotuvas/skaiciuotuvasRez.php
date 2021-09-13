<?php 


if(isset($_GET["skaicius1"]) && !empty($_GET["skaicius1"]) && isset($_GET["zenklas"]) && !empty($_GET["zenklas"]) && isset($_GET["skaicius2"]) && !empty($_GET["skaicius2"])) {

    $psk = $_GET["skaicius1"];
    $opzenklas = $_GET["zenklas"];
    $ask = $_GET["skaicius2"];
    $lygu = 0;


    if(is_numeric ($psk) && is_numeric ($ask)) {


        if($opzenklas == "+") {

            $lygu = $psk + $ask;
    
        } else if ($opzenklas == "-") {

            $lygu = $psk - $ask;

        } else if ($opzenklas == "*") {

            $lygu = $psk * $ask;

        } else if ($opzenklas == "/") {

            $lygu = $psk / $ask;

        } else {

            $lygu = "Patikrinkite reiksmes";
        }

        echo "<div class='lygu'> $lygu </div>";
        

    } else {
        
        echo "Viename is langeliu ivesta ne skaitine reiksme";
    }

} else {

echo "Kintamieji tusti arba neegzistuoja";
}

?>
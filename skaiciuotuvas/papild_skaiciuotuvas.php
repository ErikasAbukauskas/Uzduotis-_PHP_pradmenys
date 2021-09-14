<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas</title>

    <style>
        .zenklas {
            width: 30px;
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="papild_skaiciuotuvas.php" method="get">


        <input type="text" value="0" name="skaicius1" />

        <input class="zenklas" type="text" name="zenklas" />

        <input type="text" value="0" name="skaicius2" />

        <button type="submit"> Skaiciuoti </button>

    </form>
    
</body>

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


</html>
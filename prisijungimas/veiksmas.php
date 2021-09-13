<?php 

if(isset($_POST["vardas"]) && !empty($_POST["vardas"]) && isset($_POST["slaptazodis"]) && !empty($_POST["slaptazodis"])) {

    $vardas = $_POST["vardas"];
    $slaptazodis = $_POST["slaptazodis"];

    if($vardas == "admin" && $slaptazodis == "1234") {

        header("location: manopaskyra.php");

    } else {

        header("location: 404.php");
    }

}


?>
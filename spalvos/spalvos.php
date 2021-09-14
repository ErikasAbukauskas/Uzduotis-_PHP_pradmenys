<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

</head>
<body>


    <form action="spalvos.php" method="post">

    <input type="text" name="spalva">

    <button type="submit"> Nudazyti </button>

    </form>

</body>

    <?php 

        $bgspalva = " " ;

        if(isset($_POST["spalva"]) && !empty($_POST["spalva"])) {
            

            $spalva = $_POST["spalva"];
                
                if ($spalva == "juoda") {

                    $bgspalva = "black";

                } else if ($spalva == "black") {

                    $bgspalva = "black";

                } else if ($spalva == "#000000") {

                    $bgspalva = "black";

                } else if ($spalva == "raudona") {

                    $bgspalva = "red";

                } else if ($spalva == "red") {

                    $bgspalva = "red";

                } else if ($spalva == "#FF0000") {

                    $bgspalva = "red";

                } else if ($spalva == "melyna") {

                    $bgspalva = "blue";

                } else if ($spalva == "blue") {

                    $bgspalva = "blue";

                } else if ($spalva == "#0000FF") {

                    $bgspalva = "blue";

                } else {

                    echo "Galimi ivedimai: Juoda - Black - #000000, Raudona - Red - #FF0000, Melyna - Blue - #0000FF";
                }

        } else {

            echo "Laukelis tuscias";
        }
    ?>

    <style>

    body {

        background-color: <?php echo $bgspalva ?>;
    }

    </style>
            
</html>
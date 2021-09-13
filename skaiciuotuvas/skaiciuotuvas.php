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

    <form action="skaiciuotuvasRez.php" method="get">


        <input type="text" value="0" name="skaicius1" />

        <input class="zenklas" type="text" name="zenklas" />

        <input type="text" value="0" name="skaicius2" />

        <button type="submit"> Skaiciuoti </button>

    </form>
    
</body>

</html>
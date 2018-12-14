<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 05</title>
</head>

<body>
    <!-- En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque. Combien de fois le message s'affiche-il ? -->
    <h2>Les boucles: 05</h2>
    <?php
        $nombre = 1;
        while ($nombre<=15) {
            echo "On y arrive presque! Le message s'est affiché $nombre fois. <br>";
            $nombre+= 1;
        }
    ?>
</body>

</html>
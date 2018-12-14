<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 06</title>
</head>

<body>
    <!-- En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon. Combien de fois le message s'affiche-il ? -->
    <h2>Les boucles: 06</h2>
    <?php
        $nombre = 20;
        $compteur = 1;
        while ($nombre>=0) {
            echo "C'est presque bon! Le message s'est affiché $compteur fois. <br>";
            $nombre-= 1;
            $compteur++;
        }
    ?>
</body>

</html>
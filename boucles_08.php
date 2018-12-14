<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 08</title>
</head>

<body>
    <!-- En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!. Combien de fois le message s'affiche-il ? -->
    <h2>Les boucles: 08</h2>
    <?php
        $nombre = 200;
        $compteur = 1;
        while ($nombre>=0) {
            echo "Enfin! Le message s'est affiché $compteur fois. <br>";
            $nombre-=12;
            $compteur++;
        }
    ?>
</body>

</html>
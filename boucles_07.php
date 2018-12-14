<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 07</title>
</head>

<body>
    <!-- En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout. Combien de fois le message s'affiche-il ? -->
    <h2>Les boucles: 07</h2>
    <?php
        $nombre = 1;
        $compteur = 1;
        while ($nombre<=100) {
            echo "On tient le bon bout! Le message s'est affiché $compteur fois. <br>";
            $nombre+=15;
            $compteur++;
        }
    ?>
</body>

</html>
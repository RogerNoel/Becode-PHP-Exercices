<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 04</title>
</head>

<body>
    <!-- Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :
l'afficher
l'incrementer de la moitié de sa valeur -->
    <h2>Les boucles: 04</h2>
    <?php
        $nombre = 1;
        while ($nombre<=10) {
            echo " $nombre - ";
            $nombre+= $nombre/2;
        }
    ?>
</body>

</html>
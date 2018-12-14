<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 08</title>
</head>
<body>
    <!-- Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut. -->
    <h2>Fonctions 08</h2>
    <?php
        function somme ($nbre1 = 0, $nbre2 = 0, $nbre3 = 0) {
            $somme = $nbre1 + $nbre2 + $nbre3;
            return $somme;
        }

        $resultat = somme(4,1,14);
        echo $resultat;
    ?>
</body>
</html>
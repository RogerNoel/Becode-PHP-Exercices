<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 02</title>
</head>
<body>
<!-- Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 :
multiplier la première variable avec la deuxième
afficher le résultat
incrementer la première variable -->
    <h2>Les boucles: 02</h2>
    <?php
        $variable_1 = 0;
        $variable_2 = 45;
        while ($variable_1<=20) {
            $resultat = $variable_1 * $variable_2;
            echo $resultat; ?> <br/> <?php
            $variable_1+=1;
        }
    ?>
</body>
</html>
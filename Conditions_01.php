<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 01</title>
</head>
<body>
    <!-- Créer une variable age et l'initialiser avec une valeur.
Si l'âge est supérieur ou égal à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur. -->
    <?php
        $age = 2;
        if ($age>=18) {
            echo 'Vous êtes majeur.';
        }
        else {
            echo 'Vous êtes mineur.';
        }
    ?>
</body>
</html>
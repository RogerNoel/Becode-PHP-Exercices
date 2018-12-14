<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 02</title>
</head>
<body>
    <!-- Créer une variable IsEasy de type booléan et l'initialiser avec une valeur. 
Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. 
Bonus : L'écrire de deux manières différentes. -->
    <h2>Méthode if...else</h2>
    <?php
        $isEasy = false;
        if ($isEasy) {
            echo 'C\'est facile!!';
        }
        else {
            echo 'C\'est difficile!!';
        }
    ?>
    <h2>Méthode ternaire</h2>
    <?php
        $isEasy = true;
        $resultat = (($isEasy) ? 'C\'est facile!!': 'C\'est difficile!!');
        echo $resultat;
    ?>
</body>
</html>
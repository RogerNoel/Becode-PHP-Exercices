<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 03</title>
</head>
<body>
    <!-- Créer deux variables age et genre. La variable genre peut prendre comme valeur :
    Homme - Femme
    En fonction de l'âge et du genre, afficher la phrase correspondante :
    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeur
    Vous êtes une femme et vous êtes mineur
    Gérer tous les cas. -->
    <h2>Conditions 03</h2>
    <?php
        $age = 12;
        $genre = 'femme';
        if ($age>=18 && $genre=='homme') {
            echo 'Vous êtes un homme et vous êtes majeur';
            }
            elseif ($age<18 && $genre=='homme') {
                echo 'Vous êtes un homme et vous êtes mineur';
            }
            elseif ($age>=18 && $genre=='femme') {
                echo 'Vous êtes une femme et vous êtes majeure';
            }
            else {
                echo 'Vous êtes une femme et vous êtes mineure';
            }
    ?>
</body>
</html>
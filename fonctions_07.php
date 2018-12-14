<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 07</title>
</head>
<body>
    <!-- Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur : Homme - Femme -->
    <h2>Fonctions 07</h2>
    <?php
        function whoAreYou ($age, $genre) {
            if ($genre == 'Homme' or $genre == 'Femme') {
                if ($age>=18 && $genre=='Homme') {
                    echo 'Vous êtes un homme et vous êtes majeur';
                }
                elseif ($age<18 && $genre=='Homme') {
                    echo 'Vous êtes un homme et vous êtes mineur';
                }
                elseif ($age>=18 && $genre=='Femme') {
                    echo 'Vous êtes une femme et vous êtes majeure';
                }
                else {
                    echo 'Vous êtes une femme et vous êtes mineure';
                }
            }
            else {
                echo 'La variable "genre" doit renseigner "Homme" ou "Femme"';
            }
        }  

        whoAreYou(22, 'chien');
    ?>
</body>
</html>
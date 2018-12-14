<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 02</title>
</head>
<body>
    <!-- Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine. -->
    <h2>Fonctions 02</h2>
    <?php
        function chaineCaract ($string) {
            return $string;
        }
        $resultat = chaineCaract('Salut!');
        echo $resultat;
    ?>
</body>
</html>
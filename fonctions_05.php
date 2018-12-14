<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 05</title>
</head>
<body>
    <!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne la concaténation de ces deux paramètres.x -->
    <h2>Fonctions 05</h2>
    <?php
        function glue ($nbre, $chaine) {
            if (is_int($nbre) && is_string($chaine)) {
            $concatenation = "$nbre $chaine";
            return $concatenation;
            }
            else {
                echo 'Vérifiez le typage des variables en paramètres';
            }
        }
        $resultat = glue(10, 'mots');
        echo $resultat;
    ?>
</body>
</html>
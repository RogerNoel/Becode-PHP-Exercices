<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 03</title>
</head>
<body>
    <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui retourne la concaténation de ces deux chaines. -->
    <h2>Fonctions 03</h2>
    <?php
        function chaineCaract ($string_1, $string_2) {
            $concat = "$string_1  $string_2";
            return $concat;
        }
        $resultat = chaineCaract('Salut :-)', 'les gens!');
        echo $resultat;
    ?>
</body>
</html>
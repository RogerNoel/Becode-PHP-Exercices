<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 04</title>
</head>
<body>
    <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    "Le premier nombre est plus grand" si le premier nombre est plus grand que le deuxième
    "Le premier nombre est plus petit" si le premier nombre est plus petit que le deuxième
    "Les deux nombres sont identiques" si les deux nombres sont égaux -->
    <h2>Fonctions 04</h2>
    <?php
        function comparaison ($nb1, $nb2) {
            if ($nb1>$nb2) {
                echo 'Le premier nombre est plus grand';
            }
            elseif ($nb2>$nb1) {
                echo 'Le premier nombre est plus petit';
            }
            else {
                echo 'Les deux nombres sont identiques';
            }
        }
        comparaison(20, 20);
    ?>
</body>
</html>
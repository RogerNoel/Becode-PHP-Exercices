<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles 01</title>
</head>
<body>
<!-- Créer une variable et l'initialiser à 0. Tant que cette variable n'atteint pas 10, il faut :
l'afficher, l'incrementer -->
    <h2>Les boucles: 01</h2>
    <?php
        $iterateur = 0;
        for ($iterateur=0; $iterateur <= 10 ; $iterateur++) { 
            echo "La variable \"iterateur\" vaut $iterateur"; ?><br/><?php
        }
    ?>
</body>
</html>
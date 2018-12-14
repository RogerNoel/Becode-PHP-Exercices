<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fonctions 06</title>
</head>
<body>
    <!-- Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans". -->
    <h2>Fonctions 06</h2>
    <?php
        function sayHello ($lastName, $firstName, $age) {
            $string = "Bonjour $lastName $firstName, tu as $age ans.";
            return $string;
        }
        $resultat = sayHello('Noel', 'Roger', 54);
        echo $resultat;
        
    ?>
</body>
</html>
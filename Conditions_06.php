<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 06</title>
</head>
<body>
    <!-- Traduire ce code avec des if et des else :
        echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur'
    -->
    <h2>Conditions 06</h2>
    <?php
        $monAge = 54;
        if ($monAge>=18) {
            echo 'Tu es majeur.';
        }
        else {
            echo 'Tu n\'es pas majeur.';
        }
    ?>
</body>
</html>
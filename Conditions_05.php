<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 05</title>
</head>
<body>
    <!-- Traduire ce code avec des if et des else :
        echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    -->
    <h2>Conditions 05</h2>
    <?php
        $maVariable = "Homme";
        if ($maVariable == 'Homme') {
            echo 'C\'est un développeur !!!';
        }
        else {
            echo 'C\'est une développeuse !!!';
        }
    ?>
</body>
</html>
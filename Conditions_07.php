<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 07</title>
</head>
<body>
    <!-- Traduire ce code avec des if et des else :
        echo ($maVariable == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    -->
    <h2>Conditions 07</h2>
    <?php
        $maVariable = true;
        if ($maVariable) {
            echo 'c\'est ok !!';
        }
        else {
            echo 'c\'est pas bon !!!';
        }
    ?>
</body>
</html>
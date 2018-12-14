<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 08</title>
</head>
<body>
    <!-- Traduire ce code avec des if et des else :
        echo ($maVariable) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    -->
    <h2>Conditions 08</h2>
    <?php
        $maVariable = false;
        if ($maVariable) {
            echo 'c\'est ok !!';
        }
        else {
            echo 'c\'est pas bon !!!';
        }
    ?>
</body>
</html>
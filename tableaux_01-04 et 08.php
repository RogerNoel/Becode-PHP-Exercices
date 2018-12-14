<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux 01-02-03-04-08</title>
</head>
<body>
<!-- créer un tableau avec les mois de l'année -->
    <h2>Tableaux 01-02-03-04</h2>
    <?php
        $mois = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        var_dump($mois);
        echo ($mois[2]);?><br/><?php
        echo ($mois[5]);?><br/><?php
        $mois[7] = 'Août';
        var_dump($mois);
        foreach ($mois as $items) {
            echo "$items <br>";
        }
    ?>
</body>
</html>
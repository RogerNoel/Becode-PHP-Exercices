<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableaux 05-06-07-09-10</title>
</head>
<body>
<!-- Créer un tableau associatif avec comme index le numéro des départements de la région Auvergne-Rhône-Alpes et en valeur leur nom. -->
    <h2>Tableaux 05-06-07-09-10</h2>
    <?php
        $departements = array(
            1 => 'Ain',
            3 => 'Allier',
            7 => 'Ardèche',
            15 => 'Cantal',
            26 => 'Drôme',
            38 => 'Isère',
            42 => 'Loire',
            43 => 'Haute-Loire',
            63 => 'Puy-de-Dôme',
            69 => 'Rhône',
            73 => 'Savoie',
            74 => 'Haute-Savoie'
        );
        var_dump($departements);
        echo ($departements[69]);
        $departements[57] = 'Moselle';
        var_dump($departements);
        foreach ($departements as $cle => $valeur) {
            echo "Le département $valeur porte le numéro $cle <br/>";
        }
    ?>
</body>
</html>
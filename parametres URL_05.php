<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres URL 05</title>
</head>
<body>
<!-- Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12 -->
    <h2>Paramètres URL 05</h2>
    <?php
        if (isset($_GET['semaine'])) {
            echo 'N° de la semaine = '.$_GET['semaine'];
        }
        else {
            echo 'Variable manquante';
        }
     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres URL 06</title>
</head>
<body>
<!-- Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101 -->
    <h2>Paramètres URL 06</h2>
    <?php
        if (isset($_GET['batiment']) && isset($_GET['salle'])) {
            echo 'rendez-vous dans la salle '.$_GET['salle'].' du bâtiment '.$_GET['batiment'];
        }
        else {
            echo 'variable manquante';
        }
     ?>
</body>
</html>
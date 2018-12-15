<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres URL 03</title>
</head>
<body>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016 -->
    <h2>Paramètres URL 03</h2>
    <?php
    if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
        echo 'Date de début: ' . $_GET['dateDebut'] . ' - Date de fin: ' . $_GET['dateFin'];
    }
    else {
        echo "Variables manquantes";
    }
        
    ?>
</body>
</html>
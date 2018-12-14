<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres URL 01</title>
</head>
<body>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean -->
    <h2>Paramètres URL 01</h2>
    <?php
        if (isset($_GET['nom']) && isset($_GET['prenom'])) {
            
            echo $_GET['nom'] . ' '.  $_GET['prenom'];
        }
        else {
            echo "<h3> variables manquantes dans l'URL </h3>";
        } 
    ?>
</body>
</html>
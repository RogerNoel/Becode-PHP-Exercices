<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres URL 04</title>
</head>
<body>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP -->
    <h2>Paramètres URL 04</h2>
    <?php
        if (isset($_GET['langage']) && isset($_GET['serveur'])) {
            echo 'Le langage '.$_GET['langage'].' tourne sur le serveur '.$_GET['serveur'];
        }
        else {
            echo 'Variables manquantes';
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres URL 02</title>
</head>
<body>
<!-- Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean -->
    <h2>Paramètres URL 02</h2>
    <?php
        if (isset($_GET['age'])) {            
            echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' a ' . $_GET['age'] . ' ans.';
        }
        else {
            echo '<h3> La variable "âge" est manquante dans l\'URL </h3>';
        } 
    ?>
</body>
</html>
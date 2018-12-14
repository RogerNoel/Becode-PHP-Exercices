<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice IfElse</title>
    <style>
        .rad { margin-left: 15px; }
    </style>
</head>

<body>
    <div style='width: 400px; border: 1px solid black; margin: auto;'>
        <form style="margin-left: 20px;" action="" method="POST">
            <p>Entrez ici l'opérande 1</p>
            <input type="text" name="nombre1">
            <p>Entrez ici l'opérande 2</p>
            <input type="text" name="nombre2">
            <p style="display: flex;">Choisissez l'opérateur :<br />
                <input class='rad' type="radio" name="operateur" value="add" id="add" /> <label for="add"><strong>+</strong></label><br />
                <input class='rad' type="radio" name="operateur" value="sous" id="sous" /> <label for="sous"><strong>-</strong></label><br />
                <input class='rad' type="radio" name="operateur" value="div" id="div" /> <label for="div"><strong>/</strong></label><br />
                <input class='rad' type="radio" name="operateur" value="mult" id="mult" /> <label for="mult"><strong>x</strong></label><br />
                <input class='rad' type="radio" name="operateur" value="modu" id="modu" /> <label for="modu"><strong>%</strong></label><br />
            </p>
            <input type="submit">
        </form>

        <div style="width: 300px; margin: auto; border: 1px solid black; margin-bottom: 20px; margin-top: 20px; text-align: center;">

            <?php
                $nombre1 = $_POST['nombre1'];
                $nombre2 = $_POST['nombre2'];
                $operateur = $_POST['operateur'];
                //echo $_POST['operateur'];
                if ($operateur == 'add') {
                    echo $nombre1 + $nombre2;
                }
                elseif ($operateur == 'sous') {
                    echo $nombre1 - $nombre2;
                }
                elseif ($operateur == 'div') {
                    echo $nombre1 / $nombre2;
                }
                elseif ($operateur == 'mult') {
                    echo $nombre1 * $nombre2;
                }
                else {
                    echo $nombre1 % $nombre2;
                }
            ?>
            </div>
    </div>
</body>

</html>
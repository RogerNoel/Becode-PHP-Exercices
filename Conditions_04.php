<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions 04</title>
</head>
<body>
    <!-- L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
    Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante. -->
    <h2>Conditions 04</h2>
    <?php
        $magnitude = 7;
        switch ($magnitude) {
            case '1':
                echo 'Magnitude 1: micro-séisme impossible à ressentir.';
                break;
            case '2':
                echo 'Magnitude 2: micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                break;
            case '3':
                echo 'Magnitude 3: ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                break;
            case '4':
                echo 'Magnitude 4: séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                break;
            case '5':
                echo 'Magnitude 5: séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                break;
            case '6':
                echo 'Magnitude 6: fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                break;
            case '7':
                echo 'Magnitude 7: séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                break;
            case '8':
                echo 'Magnitude 8: séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                break;
            case '9':
                echo 'Magnitude 9: séisme capable de tout détruire sur une très vaste zone.';
                break;
            
            default:
                echo 'Le nombre que vous avez entré n\'est pas valide; entrez un nombre de 1 à 9';
                break;
        }
    ?>
</body>
</html>
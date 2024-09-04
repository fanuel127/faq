<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>

<body>

    <style>
        table {
            border-collapse: collapse;
        }

        tr,
        th,
        td {
            border: 1px solid black;
        }
    </style>

    <table>
        <tr>
            <th>Nom du filtre</th>
            <th>Id du filtre</th>
        </tr>

        <?php
        $filtre = filter_list();
        foreach ($filtre as $id => $nomFiltre) {
            echo '<tr><td>' . $nomFiltre . '</td><td>' . filter_id($nomFiltre) . '</td></tr>';
        }
        ?>


    </table>
    <br>

    <?php

    $nombre1 = 5;
    $nombre2 = 3;

    $addition = $nombre1 + $nombre2;
    $soustraction = $nombre1 - $nombre2;
    $multiplication = $nombre1 * $nombre2;
    $division = $nombre1 / $nombre2;
    $modulo = $nombre1 % $nombre2;

    echo $nombre1 + $nombre2 . '<br>';
    echo $nombre1 - $nombre2 . '<br>';
    echo $multiplication . '<br>';
    echo $division . '<br>';
    echo $modulo . '<br>';

    $multiplication = 20;
    echo $multiplication . '<pre>';

    $note = 18;

    if ($note < 10) {
        echo "vous n'avez pas eu la note ! <br>";
        $score = 'nul';
    } elseif ($note == 10) {
        echo 'vous avez eu la note ! <br>';
        $score = 'passable';
    } else {
        echo 'vous avez eu plus de la note ! <br>';
        $score = 'très bien';
    }
    echo 'votre score : ' . $score . '<pre>';

    function message($prenom, $age)
    {
        echo "$prenom a $age ans ! <pre>";
    }
    message('fanuel', 17);

    //cette fonction permet de convertir des carctères en entité html
    $str = 'j\'aime le <strong>"php"</strong>';
    echo htmlspecialchars_decode($str) . '<br>'; // affiche les balises html comme des textes
    echo htmlspecialchars($str) . '<br>'; // transforme les balises html

    //fonction new_line_two_br (nl2br)
    echo "<br>" .nl2br("bonjour et bonne journée !") ;
    ?>
</body>

</html>

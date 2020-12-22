<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55-60 -->

    <?php

    $matches = [
        [
            'Squadra Casa' => 'Olimpia Milano',
            'Punti Casa' => 60,
            'Squadra Ospite' => 'Cantù',
            'Punti Ospite' => 55
        ],
        [
            'Squadra Casa' => 'Vicenza',
            'Punti Casa' => 80,
            'Squadra Ospite' => 'Viareggio',
            'Punti Ospite' => 95
        ],
        [
            'Squadra Casa' => 'Barcellona',
            'Punti Casa' => 70,
            'Squadra Ospite' => 'Sparta Praga',
            'Punti Ospite' => 80
        ],

    ];

    ?>

    <?php

    foreach ($matches as $match) {
        # code...
    ?>

        <h3>

        <?php
        echo $match['Squadra Casa'] . " - " . $match['Squadra Ospite'] . " " . $match['Punti Casa'] . " | " . $match['Punti Ospite'];
    }
        ?>

        </h3>
        <?php

        ?>












</body>

</html>
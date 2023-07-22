<!--
# Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

Ho voluto fare la le squadre di calcio, non conosco squadre di basket --- NATURALMENTE IL NAPOLI HA PIù punti di tutte!!!
-->

<?php
$campionati = [
    [
        'squadra_incasa' => 'Napoli',
        'squadra_fuoricasa' => 'Milan',
        'squadra_incasa_punti' => '85',
        'squadra_fuoricasa_punti' => '45',
    ],
    [
        'squadra_incasa' => 'Juventus',
        'squadra_fuoricasa' => 'Pisa',
        'squadra_incasa_punti' => '15',
        'squadra_fuoricasa_punti' => '33',
    ],
    [
        'squadra_incasa' => 'Roma',
        'squadra_fuoricasa' => 'Lazio',
        'squadra_incasa_punti' => '56',
        'squadra_fuoricasa_punti' => '62',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Monica Izzo">
    <title>PHP Snacks | 01</title>

    <!-- icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/faicon.png">

    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="mt-5">Campionato di Calcio 2023 | Risultati</h3>
        <ul>
            <?php foreach ($campionati as $campionato) : ?>
                <li><?= $campionato['squadra_incasa'] ?> - <?= $campionato['squadra_fuoricasa'] ?> | <?= $campionato['squadra_incasa_punti'] ?> - <?= $campionato['squadra_fuoricasa_punti'] ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>
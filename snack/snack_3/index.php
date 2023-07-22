<?php

/*
# Bonus
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo.
*/

$paragrafo = "Preparare una margherita oggi costa il 14% in più. Un aumento doppio, rispetto al tasso medio di inflazione in Italia, che gli ultimi dati attestano al 6,7%. I calcoli arrivano dall’agenzia di stampa Bloomberg, che per farli ha utilizzato le ultime rilevazioni dei prezzi condotte dall’Istat e riferite al mese di giugno. A causare l’impennata è soprattutto l’olio di oliva, il cui prezzo è esploso di oltre il 26% nel corso dell’ultimo anno.

Nel caso della più classica delle pizze napoletane bisogna calcolare anche gli aumento della farina di grano, del pomodoro e della mozzarella. In particolare la farina, che su base mensile avrebbe anche registrato un piccolo calo dello 0,6%, nell’ultimo anno ha visto il prezzo al dettaglio crescere del 6,8%. Il costo dei pomodori pelati al supermercato è invece aumentato del 12,8% e potrebbe subire ulteriori incrementi legati al maggiore prezzo spuntato dai coltivatori nella campagna 2023 per il pomodoro. Quanto infine alla mozzarella, i rincari annuali sono nell’ordine del 17%.";

$paragrafi = explode('.', $paragrafo);
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
    <title>PHP Snacks | 03</title>
    <!-- icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/faicon.png">
    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php foreach ($paragrafi as $p) : ?>
            <p><?= $p ?>.</p>
        <? endforeach; ?>
    </div>
</body>

</html>
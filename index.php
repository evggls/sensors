<?php
    require_once "functions.php";
    require_once "config.php";
    ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="ISO-8859-1">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>BAL Temperature Control</title>
    </head>

    <body class="bg-dark bg-opacity-25">
        <main class="px-2 mx-2 mt-2">
            <?php if (isset($data) && !empty($data)) : ?>
                <div class="row justify-content-around">
                    <?php foreach ($data as $item): ?>
                        <?php $style = setStyle(floatval($item['temp']),  $upperLimit, $lowerLimit)?>
                        <div class="col-3 text-center rounded p-4 text-white <?= $styles[$style]?>">
                            <h2><?= strtoupper($item['name']) ?></h2>
                            <h2><?= $item['temp'] . ' &#8451;' ?></h2>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif;?>
        </main>
        <script>
            setInterval(function (){
                location.reload();
            }, 5000)
        </script>
    </body>
</html>

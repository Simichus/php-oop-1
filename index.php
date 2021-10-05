<?php require_once __DIR__ . '/data/movies.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($movies as $movie) : ?>
        <h1><?= $movie->getTitle() ?></h1>
        <div><?= $movie->getDirector() ?></div>
    <?php endforeach; ?>
</body>

</html>
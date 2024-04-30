<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la pizza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/details.css">
</head>
<body>
    <header>

    </header>
<main>
<div class="details">
    <h1>Détails de la pizza</h1>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $pizza['PATHIMAGE']; ?>" class="card-img-top img-pizza" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $pizza['DESIGNPIZZ']; ?></h5>
            <p><strong>Prix : </strong><?php echo $pizza['TARIFPIZZ']; ?></p>
        </div>
    </div>
</div>
</main>
<footer>

</footer>

</body>
</html>

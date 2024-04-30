<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du livreur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/details.css">
</head>
<body>

<div class="details">
    <h1>Détails du livreur</h1>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $livreur['PATHIMAGE']; ?>" class="card-img-top img-livreur" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $livreur['PRENOMLIVR'] . ' ' . $livreur['NOMLIVR']; ?></h5>
            <p><strong>Date d'embauche : </strong><?php echo $livreur['DATEEMBAUCHLIVR']; ?></p>
        </div>
    </div>
</div>

</body>
</html>

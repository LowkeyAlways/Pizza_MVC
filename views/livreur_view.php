<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des livreurs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>

<div class="container">
    <h1>Liste des livreurs</h1>
    <div class="row">
        <?php foreach ($livreurs as $livreur): ?>
        <div class="col-md-auto my-3">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $livreur['PATHIMAGE']; ?>" class="card-img-top img-livreur" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $livreur['PRENOMLIVR'] . ' ' . $livreur['NOMLIVR']; ?></h5>
                    <p><strong>Date d'embauche : </strong><?php echo $livreur['DATEEMBAUCHLIVR']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

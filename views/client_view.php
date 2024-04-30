<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des clients</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>

<div class="container">
    <h1>Liste des clients</h1>
    <div class="row">
        <?php foreach ($clients as $client): ?>
        <div class="col-md-auto my-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $client['PRENOMCLIE'] . ' ' . $client['NOMCLIE']; ?></h5>
                    <p><strong>Adresse : </strong><?php echo $client['ADRESSECLIE']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

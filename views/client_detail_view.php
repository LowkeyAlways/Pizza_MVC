<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/details.css">
</head>
<body>

<div class="details">
    <h1>Détails du client</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $client['PRENOMCLIE'] . ' ' . $client['NOMCLIE']; ?></h5>
            <p><strong>Adresse : </strong><?php echo $client['ADRESSECLIE']; ?></p>
        </div>
    </div>
</div>

</body>
</html>

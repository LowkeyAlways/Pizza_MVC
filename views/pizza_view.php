<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des pizzas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<div class="container">
    <h1>Liste des pizzas</h1>
    <div class="row">
        <?php foreach ($pizzas as $pizza): ?>
        <div class="col-md-auto my-3">
            <form method="post" action="">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $pizza['PATHIMAGE']; ?>" class="card-img-top img-pizza" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $pizza['DESIGNPIZZ']; ?></h5>
                        <p><strong>Prix : </strong><?php echo $pizza['TARIFPIZZ']; ?></p>
                        <input type="hidden" name="id_pizza[]" value="<?php echo $pizza['NROPIZZ']; ?>">
                        <div class="d-md-flex justify-content-md-end">
                            <a href="modifier_pizza.php?id=<?php echo $pizza['NROPIZZ']; ?>" class="btn btn-primary mx-1">Modifier</a>
                            <button type="submit" name="commander" class="btn btn-primary p-button">Commander</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

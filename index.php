<?php
// Inclure les fichiers nécessaires
require_once 'models/PizzaModel.php';
require_once 'models/ClientModel.php';
require_once 'models/LivreurModel.php';

require_once 'controllers/PizzaController.php';
require_once 'controllers/ClientController.php';
require_once 'controllers/LivreurController.php';
require_once('models/config.php');


// Instancier les modèles
$db = new mysqli($_host, $_username, $_password, $_db);
$pizzaModel = new PizzaModel($db);
$clientModel = new ClientModel($db);
$livreurModel = new LivreurModel($db);

// Récupérer l'URL
$url = isset($_GET['url']) ? $_GET['url'] : '/';

// Diviser l'URL en segments
$segments = explode('/', $url);

// Vérifier et appeler le contrôleur approprié en fonction de la première partie de l'URL
$controller = $segments[0];
switch ($controller) {
    case 'pizza':
        $pizzaController = new PizzaController($pizzaModel);
        if(isset($segments[1]) && is_numeric($segments[1])) {
            $pizzaController->show($segments[1]);
        } else {
            $pizzaController->index();
        }
        break;
    case 'client':
        $clientController = new ClientController($clientModel);
        if(isset($segments[1]) && is_numeric($segments[1])) {
            $clientController->show($segments[1]);
        } else {
            $clientController->index();
        }
        break;
    case 'livreur':
        $livreurController = new LivreurController($livreurModel);
        if(isset($segments[1]) && is_numeric($segments[1])) {
            $livreurController->show($segments[1]);
        } else {
            $livreurController->index();
        }
        break;
    default:
        // Gérer les routes non définies ici
        echo "Page not found";
        break;
}
?>

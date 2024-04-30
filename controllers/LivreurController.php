<?php

require_once('models/LivreurModel.php');

class LivreurController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $livreurs = $this->model->getAllLivreurs();
        include 'views/livreur_view.php';
    }

    public function show($id) {
        $livreur = $this->model->getLivreur($id);
        include 'views/livreur_detail_view.php';
    }
}
?>

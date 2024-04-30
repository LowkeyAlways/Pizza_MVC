<?php

require_once('models/ClientModel.php');
class ClientController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $clients = $this->model->getAllClients();
        include 'views/client_view.php';
    }

    public function show($id) {
        $client = $this->model->getClient($id);
        include 'views/client_detail_view.php';
    }
}
?>

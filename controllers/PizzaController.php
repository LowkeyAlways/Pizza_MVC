<?php

require_once('models/PizzaModel.php');

class PizzaController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function index() {
        $pizzas = $this->model->getAllPizzas();
        include 'views/pizza_view.php';
    }

    public function show($id) {
        $pizza = $this->model->getPizza($id);
        include 'views/pizza_detail_view.php';
    }
}
?>

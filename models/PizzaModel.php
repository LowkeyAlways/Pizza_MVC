<?php 

require_once('connexiondb.php');

  class PizzaModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllPizzas() {
        $result = $this->db->query('SELECT * FROM pizza');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPizza($id) {
        $stmt = $this->db->prepare('SELECT * FROM pizza WHERE NROPIZZ = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}


?>
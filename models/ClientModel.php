<?php 

require_once('connexiondb.php');

class ClientModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllClients() {
        $result = $this->db->query('SELECT * FROM client');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getClient($id) {
        $stmt = $this->db->prepare('SELECT * FROM client WHERE NROCLIE = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}

?>

<?php 

require_once('connexiondb.php');

class LivreurModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllLivreurs() {
        $result = $this->db->query('SELECT * FROM livreur');
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getLivreur($id) {
        $stmt = $this->db->prepare('SELECT * FROM livreur WHERE NROLIVR = ?');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}

?>

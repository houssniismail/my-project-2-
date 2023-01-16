<?php
require_once("../database/database.php");

class delete extends database{
    public function supprission($id){
        $pdo = $this->connect();
        $query = "DELETE FROM products WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
<?php
require_once("../database/database.php");

class deleteCategory extends database{
public function deletCategory($nom_category){
    $pdo = $this->connect();
    $requet = "DELETE FROM `categore` WHERE `nom_categore` = :nom_category ";
    $stmt = $pdo->prepare($requet);
    $stmt->bindParam(':nom_category', $nom_category);
    $stmt->execute();
}
}
?>
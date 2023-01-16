<?php
require_once("../database/database.php");

class addcategory extends database{
    public function addcategory_to($value1, $value2, $value3){
        $db = new database();
        $pdo = $db->connect();
        $query = "INSERT INTO `categore`(`nom_categore`, `description_categore`, `photo_catigorie`) VALUES ('$value1','$value2','$value3')";
        $exe = $pdo->prepare($query);
        $exe->execute();
       
    }
}
 

?>
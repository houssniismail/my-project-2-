<?php
require_once("../database/database.php");

class addproduct extends database{
    public function addproduct_to($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8){
        $db = new database();
        $pdo = $db->connect();
        $query = "INSERT INTO `products`(`id`, `référence`, `libelle`, `code_bar`, `prix_d_achat`, `prix_final`, `prix offer`, `photo`, `forkey`) VALUES (NULL ,'$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8')";
        $exe = $pdo->prepare($query);
        $exe->execute();
       
    }
}
?>
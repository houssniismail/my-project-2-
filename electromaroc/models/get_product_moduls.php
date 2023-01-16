<?php
require_once('../database/database.php');
class getproduct extends database{
    public function getto(){
     $db=new database();
     $pdo=$db->connect();
     $query="SELECT * FROM `products`";
     $exe=$pdo->prepare($query);
     $exe->execute();
     $toutproduct = $exe->fetchAll(PDO::FETCH_ASSOC);
     return $toutproduct;
    }
}



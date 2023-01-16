<?php
require_once('../database/database.php');
class getcategory extends database{
    public function getto(){
     $db=new database();
     $pdo=$db->connect();
     $query="SELECT * FROM `categore`";
     $exe=$pdo->prepare($query);
     $exe->execute();
     $toutproduct = $exe->fetchAll(PDO::FETCH_ASSOC);
     return $toutproduct;
    }
}
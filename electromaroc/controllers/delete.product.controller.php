<?php
require_once("../models/delete.product.model.php");
class deletecoferm{
       public function confermation(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $delete = new delete();
            $delete->supprission($id);
        }
        header("Location: http://localhost/electromaroc/views/gestiondesproduit.php"); 
       }
}
$action = new deletecoferm();
$action->confermation();
?>
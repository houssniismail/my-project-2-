<?php
require_once('../models/deletCategory.php');


class deleteCategoryConntrooler extends deleteCategory{
   public function deletecategory(){
    if(isset($_POST['value1'])){
        $prymary = $_POST['value1'];
        $dele = new deleteCategory();
        $dele->deletCategory($prymary);
        header("Location: http://localhost/electromaroc/views/getCategore.php"); 
    }
}
}
$action = new deleteCategoryConntrooler();
$action->deletecategory();
?>
<?php
include('../models/add_product_model.php');
class confermation{
public function confermation(){
   if(isset($_POST['submit'])){
       $value1 = $_POST['value1'];
       $value2 = $_POST['value2'];
       $value3 = $_POST['value3'];
       $value4 = $_POST['value4'];
       $value5 = $_POST['value5'];
       $value6 = $_POST['value6'];
       $value7 = $_POST['value7'];
       $value8 = $_POST['value8'];
       $exe = new addproduct();
       $exe->addproduct_to($value1, $value2, $value3, $value4, $value5, $value6, $value7, $value8);
       header("Location: http://localhost/electromaroc/views/gestiondesproduit.php");  
   }
}
}
$executing = new confermation();
$executing->confermation();

?>
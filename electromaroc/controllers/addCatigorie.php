<?php
require_once('../models/addCatigory.php');

class confermation{
public function confermation(){
   if(isset($_POST['submit'])){
       $value1 = $_POST['value1'];
       $value2 = $_POST['value2'];
       $value3 = $_POST['value3'];
       $exe = new addcategory();
       $exe->addcategory_to($value1, $value2, $value3);
       header("Location: http://localhost/electromaroc/views/admin.php");  
   }
}
}
$executing = new confermation();
$executing->confermation();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
abstract class class_you{
    protected $name_class;
    protected $nombre_de_etudiants;
    public function set_name_class($name_class){
        $this->name_class = $name_class;
    }
    public function get_name_class(){
        return $this->name_class;
    }
    public function set_nombre_de_etudiants($nombre_de_etudiants){
        $this->nombre_de_etudiants = $nombre_de_etudiants;
    }
    public function get_nombre_de_etudiantss(){
        return $this->nombre_de_etudiants;
    }
}
class prof extends class_you{
    protected $name_prof;
    protected $email_prof;
    public function set_name_prof($name_prof){
        $this->name_prof = $name_prof;
    }
    public function get_name_prof(){
        return $this->name_prof;
    }
    public function set_email_prof($name_prof){
        $this->email_prof = $email_prof;
    }
    public function get_email_prof(){
        return $this->email_prof;
    }
}
 class etudiant extends class_you {
    protected $name;
    protected $email;
    protected $password;

    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_email($email){
        $this->email = $email;
    }
    public function get_email(){
        return $this->email;
    }
    public function set_password($password){
        $this->password = $password;
    }
    public function get_password(){
        return $this->password;
    }
}


?>
</body>
</html>
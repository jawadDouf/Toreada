<?php
require_once "Database.php";
class Medcin extends Database
{


    public function selectAll(){
        $this->query("SELECT * From medcins");
        return $this->fetchAll();
    }
    public function registerMed($name,$prenom,$email,$password){
        $this->query("INSERT INTO medcins (name,prenom,email,password) VALUES ('$name','$prenom','$email','$password')");
        $this->execute();
    }

}
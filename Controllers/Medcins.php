<?php
require_once "Controller.php";
class Medcins extends Controller
{
    private $medcinModel;
    public function __construct(){
        $this->medcinModel = $this->model('Medcin');//Object of the user
    }
    public function ShowMedcins()
    {
        $data = $this->medcinModel->selectAll();
        return $data;
    }
    public function sendPage2(){
        $data2 = $this->ShowMedcins();
        $this->view('Page2',$data2);
    }
    public function register($name,$prenom,$email,$password){//Posts will be here
         $this->medcinModel->registerMed($name,$prenom,$email,$password);
         $data['name']= $name;
         $data['prenom']= $prenom;
         $data['email']= $email;
         $data['password']= $password;
          return $data;
    }


}
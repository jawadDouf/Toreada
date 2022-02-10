<!-- This class going to contain all the queries with the database -->
<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mymvc_db";
    private $PDOConnection;
    private $query;
    
    public function __construct(){
        //PDO Connection
         $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
         try{
            $this->PDOConnection = new PDO($dsn,$this->username,$this->password);
         } catch(PDOException $e){
                      echo $e->getMessage();
         }  
    }
    public function query($sql){
      $this->query = $this->PDOConnection->prepare($sql);
    }
    public function execute(){
      return $this->query->execute();
    }
    public function execute2($data){
        return $this->query->execute($data);
    }
    public function fetchAll(){
         $this->query->execute();
         $result = $this->query->fetchAll();
         return $result;
    }
    
    
        
    
  



}






?>
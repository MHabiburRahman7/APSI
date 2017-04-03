<?php

  include_once "header.php";
  class Guru {
   
      // database connection and table name
      private $conn;
      private $table_name = "guru";
   
      // object properties
      public $id;
      public $name;
   
      public function __construct($db){
          $this->conn = $db;
      }
   
      // used by select drop-down list
      function read(){
          //select all data
          $query = "SELECT id, name FROM ".$this->table_name . " ORDER BY name";  
   
          $stmt = $this->conn->prepare( $query );
          $stmt->execute();
   
          return $stmt;
      }
  
      // used to read category name by its ID
      function readName(){
           
          $query = "SELECT name FROM " . $this->table_name . " WHERE id = ? limit 0,1";
       
          $stmt = $this->conn->prepare( $query );
          $stmt->bindParam(1, $this->id);
          $stmt->execute();
       
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
           
          $this->name = $row['name'];
      }

      //add category
      function add(){

        $this->getTimestamp();

        $query = "INSERT INTO ".$this->table_name." SET name = ?, created = ?, modified = ?";

        $stmt = $this->conn->prepare($query);

        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->created=htmlspecialchars(strip_tags($this->created));
        $this->modified=htmlspecialchars(strip_tags($this->timestamp));

        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->created);
        $stmt->bindParam(3, $this->timestamp);

        if($stmt->execute()){
          return true;
        }
        else{
          return false;
        }

      }

      function edit(){
        $query = "UPDATE ".$this->table_name." SET name = :name, created =: created WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->created=htmlspecialchars(strip_tags($this->created));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':created', $this->created, PDO::PARAM_STR);
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);

        if($stmt->execute() && ($stmt->rowCount()>0)){
          return true;
        }
        else{
          $stmt->errorInfo();
          return false;
        }
      }

      //fungsi delete
      function delete(){

        $query = "DELETE FROM ".$this->table_name." WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if($result = $stmt->execute()){
          return true;
        }
        else{
          return false;
        }
      }

      function getTimestamp(){
          date_default_timezone_set('Asia/Jakarta');
          $this->timestamp = date('Y-m-d H:i:s');
      }
  }
?>
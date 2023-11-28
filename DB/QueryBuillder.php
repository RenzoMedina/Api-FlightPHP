<?php 

namespace DB;

class QueryBuillder{

    protected $conn;
    public function __construct(){
        $this->conn = Connection::start();
    }

    public  function index(){
        $sql = "SELECT * FROM topics";

        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $resul = $query->fetchAll(\PDO::FETCH_OBJ);
            return $resul;
        }
        catch(\PDOException $poe ){
            echo "Error : ".$poe->getMessage();
        }
        
    }
    
    public function show($id){
        $sql = "SELECT * FROM topics WHERE id = ?";

        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1,$id);
            $query->execute();
            $resul = $query->fetch(\PDO::FETCH_OBJ);
            return $resul;
        }
        catch(\PDOException $poe ){
            echo "Error : ".$poe->getMessage();
        }
        
    }

    public function create($params){
        $values = json_decode($params,true);
        $sql = "INSERT INTO topics (title,message,status,author,course) VALUES (?,?,?,?,?)";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1,$values['title']);
            $query->bindParam(2,$values['message']);
            $query->bindParam(3,$values['status']);
            $query->bindParam(4,$values['author']);
            $query->bindParam(5,$values['course']);
            $query->execute();
        }catch(\PDOException $poe){
            echo "Error : ".$poe->getMessage();
        }
    }

    public function update($id, $params){
        $values = json_decode($params,true);
        $sql = "UPDATE topics set title = ?, message = ?, status =?, author = ?, course=?, update_date = CURRENT_TIMESTAMP WHERE id = ?";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1, $values['title']);
            $query->bindParam(2, $values['message']);
            $query->bindParam(3, $values['status']);
            $query->bindParam(4, $values['author']);
            $query->bindParam(5, $values['course']);
            $query->bindParam(6, $id);
            $query->execute();
        }
        catch(\PDOException $poe){
            echo "Error : ".$poe->getMessage();
        }
    }

    public function delete($id){
        $sql = "DELETE FROM topics WHERE id = ?";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1,$id);
            $query->execute();
            $resul = $query->fetch(\PDO::FETCH_OBJ);
            return $resul;
        }
        catch(\PDOException $poe ){
            echo "Error : ".$poe->getMessage();
        }
       
    }
}
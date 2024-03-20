<?php
 
Class Model{

    private $server = "localhost";
    private $username="root";
private $password;
    private $db = "hikedb";
    private $conn;

    public function __construct(){
        try{
    $this->conn = new mysqli($this->server,$this->username,$this->password, $this->db);

}catch (Exception $e){
    echo "connection failed" . $e->getMessage();
}
    }


public function fetchproducts(){
    $data=null;
    $query="SELECT 
    *
FROM
    products
ORDER BY id ASC
LIMIT 3;";
    if($sql=$this->conn->query($query)){
        while($row=mysqli_fetch_assoc($sql)){
            $data[]=$row;
        }
    }
    return $data;
}
public function fetche(){
    $data=null;
    $query="SELECT * FROM events
ORDER BY id ASC
LIMIT 3;";
    if($sql=$this->conn->query($query)){
        while($row=mysqli_fetch_assoc($sql)){
            $data[]=$row;
        }
    }
    return $data;
}
public function fetchevents(){
    $data=null;
    $query="Select * from events";
    if($sql=$this->conn->query($query)){
        while($row=mysqli_fetch_assoc($sql)){
            $data[]=$row;
        }
    }
    return $data;
}

}
?>
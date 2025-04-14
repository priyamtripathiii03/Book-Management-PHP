<?php 

class Config
{

private $localhost = "localhost";
private $username = "root";
private $password = "";
private $database ="students";
private $connectionStatus;



public function connect()
{
    $this->connectionStatus = mysqli_connect($this->localhost,$this->username,$this->password,$this->database);
    
}
public function __construct()
{
    $this->connect();
}

public function insert($name,$title,$price,$description)
{
    $query = "INSERT INTO student (name,title,price,description) VALUES('$name','$title', $price, '$description')";
   $res = mysqli_query($this->connectionStatus, $query);
   
}
public function fetch()
{
    $query = "SELECT * FROM student";
   $result = mysqli_query($this->connectionStatus, $query);
   return $result;
}
public function delete($id)
{
    $query = "DELETE FROM student WHERE id=$id";
    mysqli_query($this->connectionStatus, $query);
}
public function edit($id,$title,$name,$price,$description)
{
    $query = "UPDATE student SET title='$title, name='$name', price=$price WHERE id=$id";
    mysqli_query($this->connectionStatus, $query);
}


}




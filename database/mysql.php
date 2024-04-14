<?php

$host="localhost";
$username="hlayaminnphyu";
$password="hlayaminnphyu";
$database="san_kyi_tar";

$conn=new mysqli($host,$username,$password,$database);
// $sql="INSERT INTO `my` (`name`, `money`) VALUES
// ('Su Pu', 8000);";
// $conn->query($sql);
// print_r($conn);

// $sql="UPDATE my SET name='Lu Pi' where id=32";
// $conn->query($sql);

// $sql="SELECT * FROM my where id=32";
// $query=$conn->query($sql);
// print_r($query->fetch_object());

$sql= "DELETE FROM my where id=33";
var_dump($conn->query($sql));

<?php
$server="localhost";
$user="root";
$password="";
$db="student-portal";

$conn= mysqli_connect($server,$user,$password,$db);

if (!$conn){
   die("connection failed:". mysqli_connect_error()); 
}
?>
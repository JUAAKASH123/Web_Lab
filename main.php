<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aakash";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Could'nt connect my sql".mysql_connect_error());
} else {
echo"Database connected successfully.";
} 
?>
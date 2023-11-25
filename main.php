<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userregistration";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
 die("could'nt connect my sql".mysql_connect_error());
} else {
echo"Database connected successfully";
}
?>
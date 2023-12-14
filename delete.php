<html>
<head>
<title></title>
<body>
<?php
require('connection.php');
if(isset($_POST['submit']))
{
$id=$_POST['text'];

$sql="delete from book_table where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
 echo "one record successfully deleted";
}
else
{
 echo"deletion failed";
}
mysqli_close($conn);
}
else
{
?>
<form method="POST" action="">
<table align="center">
<tr>
<th>Enter ID:<th>
<td><input type="text" name="text"><td>
</tr>
<td><input type="submit" name="submit"></td>
<?php
}
?>
</table>
</body>
</head>
</html>
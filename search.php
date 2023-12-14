<html>
<head>
<title></title>
<body>
<?php
require('connection.php');
if(isset($_POST['submit']))
{
$id=$_POST['text'];

$sql="select * from book_table where id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
	echo "<br><br>Book name".$row["book_name"]."<br>";
	echo "Author".$row["author_name"]."<br>";
	echo "Publisher".$row["publisher_name"]."<br>";
	echo "Quanity".$row["quantity"]."<br>";
	echo "Price".$row["price"]."<br>";
	}
}
else
{
echo "No Result";
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
<html>
<body>
<?php
require('connection.php');
if(isset($_POST['sub']))
{
$book_name=$_POST['book'];
$author_name=$_POST['author'];
$publisher_name=$_POST['publisher'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$sql="insert into book_table(book_name,author_name,publisher_name,quantity,price)VALUES('$book_name','$author_name','$publisher_name','$quantity','$price')";
$result=mysqli_query($conn,$sql);
if($result){
echo"New records successfully created";
}
mysqli_close($conn);
} else {
?>

<form method="POST" action="">
<h2 align="center">INSERT BOOK HERE</h2>
<table align="center" cellspacing="5" cellpadding="5">
<tr>
<th>book name</th>
<th><input type="text" name="book"></th>
</tr>
<tr>
<th>author_name</th>
<td><input type="text" name="author"></textarea></td>
</tr>
<tr>
<th>publisher_name</th>
<th><input type="text" name="publisher"></th>
</tr>
<tr>
<th>quantity</th>
<th><input type="text" name="quantity"></th>
</tr>
<tr>
<th>price</th>
<th><input type="text" name="price"></th>
</tr>
<tr>
<td align="center">
<td><input type="submit" colspan="2" name="sub"></td>
<td></td>
<td></td>
</td>
</tr>
</table>
<?php
}
?>
</form>
</body>
</html>
<html>
<head>
</head>
<body>
<?php
require('connection.php');
$sql="select*from book_table";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
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
?>
</body>
</html>
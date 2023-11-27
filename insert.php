<html>
<body>
<?php
require('main.php');
if(isset($_POST['sub']))
{
$name=$_POST['Name'];
$address=$_POST['address'];
$phone_number=$_POST['number'];
$user_name=$_POST['uname'];
$Password=$_POST['password'];
$sql="insert into userregistration(name,password,phone_number,user_name,address)VALUES('$name','$password','$phone_number','$user_name','$address')";
$result=mysqli_query($conn,$sql);
if($result){
echo"New records successfully created";
}
mysqli_close($conn);
} else {
?>

<form method="POST" action="">
<h2 align="center">New User Registration</h2>
<table align="center" cellspacing="5" cellpadding="5">
<tr>
<th>Enter the Name</th>
<th><input type="text" name="Name"></th>
</tr>
<tr>
<th>Address</th>
<td><textarea rows="2" cols="10" name="address"></textarea></td>
</tr>
<tr>
<th>Phone Number</th>
<th><input type="number" name="number"></th>
</tr>
<tr>
<th>User Name</th>
<th><input type="text" name="uname"></th>
</tr>
<tr>
<th>Password</th>
<th><input type="password" name="password"></th>
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
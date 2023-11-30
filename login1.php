<html>
<head>
<title>loginpage</title>
<style>
div{
margin-top:150px;
};
</style>
</head>
<div>
<body align="center">
<?php
require('main.php');
if(isset($_POST['submit']))
{
$name=$_POST['uuname'];
$password=$_POST['password'];
$sql="select * from user_registration where user_name='$name' AND password='$password'"; 
$result=mysqli_query($conn,$sql); 
if(mysqli_num_rows($result)>0){
header('Location:loginsuccess.html');
} else {
header('Location:loginunsuccess.html');
}
mysqli_close($conn);
}
else
{
?>
<form method="POST" action="">
<table align="center" cellspacing="5" cellpadding="5">
<tr>
<th>Username</th>
<td><input type="text" name="uuname"></td>
</tr>
<tr>
<th>Password</th>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td align="center" colspan="2">New User? <a href="newlogin.html">Sign Up</td>
</tr>
<tr>
<td align="center" colspan="2"><button name="submit">Submit</button></td>
<td></td>
<td></td>
</tr>
</table>
<?php
}
?>
</form>
<div>
</body>
</html>
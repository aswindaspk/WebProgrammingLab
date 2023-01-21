<html><head>
<style>
fieldset {
  font-size:20px;
  padding:10px;
  width:250px;
  line-height:1.8;}</style>
<title>registration form</title>
</head>
<body>
<center>
<fieldset><legend>Registration Form</legend>

<form name="form" action="#" method="POST">
Username:<br>
<input type="text" name="name"><br>
Password:<br>
<input type="password" name="pass"><br>
e-mail:<br>
<input type="email" name="email"><br>
<input type="submit" value="Submit" name="Submit">
<input type="reset" value="Reset" name="Reset"></fieldset></center>
</form>
<?php
if(isset($_POST['Submit']))
{
$username=$_POST['name'];
$password=$_POST['pass'];
$email=$_POST['email'];
if(empty($username))
{
 echo "<script>alert('Enter Username')</script>";
}
else if(empty($email))
{
 echo "<script>alert('Enter e-mail')</script>";
}
else if(empty($password))
{
 echo "<script>alert('Enter password')</script>";
}
else if(strlen($password)<8)
{
 echo "<script>alert('Your password must contain atleat 8 character')</script>";
}
else
{
 echo "<script>alert('Registration successful')</script>";
}
}
?>
</body>
</html>

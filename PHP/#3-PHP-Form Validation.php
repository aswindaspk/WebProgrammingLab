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
E-mail:<br>
<input type="email" name="email"><br>
Create Password:<br>
<input type="password" name="pass1"><br>
Confirm Password:<br>
<input type="password" name="pass2"><br>
Contact:<br>
<input type="text" name="phn"><br>
Gender:<br>
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<input type="radio" name="gender">Other
<input type="submit" value="Submit" name="Submit">
<input type="reset" value="Reset" name="Reset">
</fieldset></center>
</form>
<?php
if(isset($_POST['Submit']))
{
$username=$_POST['name'];
$password1=$_POST['pass1'];
$password2=$_POST['pass2'];
$email=$_POST['email'];
$phone=$_POST['phn'];
if(empty($username))
{
 echo "<script>alert('Enter Username!')</script>";
}
else if(empty($email))
{
 echo "<script>alert('Enter e-mail!')</script>";
}
else if(empty($password1))
{
 echo "<script>alert('Enter password!')</script>";
}
else if(strlen($password1)<8)
{
 echo "<script>alert('Your password must contain atleat 8 character!')</script>";
}
else if(is_numeric($phone)!=True){
echo "<script>alert('Phone number should be Numeric!')</script>";
}
else if($password1!=$password2){
echo "<script>alert('Passwords do not Match!')</script>";
}
else if(empty($phone))
{echo "<script>alert('Enter Phone Number!')</script>";
}
else
{
 echo "<script>alert('Registration successful!')</script>";
}
}
?>
</body>
</html>

<html>
<head>
<style>
<html><head>
<style>
fieldset {
  font-size:20px;
  padding:10px;
  width:100x;
  line-height:1.8;}</style>
<title>Electricity Bill</title>
</head>
<body>
<center><fieldset>
<h3>ELECTRICITY BILL</h3>
<form method="post" action="#">
Consumer ID:<br><input type="number" name="id"><br>
Name:<br><input type="text" name="name"><br>
Units Consumed:<br><input type="number" name="units"><br>
<input type="Submit" name="Calculate Amount">
<input type="reset" name="Reset"><br></fieldset></center>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST['id'];
$name=$_POST['name'];
$units=$_POST['units'];
echo "<h3>KSEB</h3>";
echo "Consumer ID: ".$id."<br>";
echo "Units Consumed: ".$units."<br>";
if($units<=100){$amt=$units*3;}
else if($units>100 && $units<=200){$amt=$units*4;}
else if($units>200 && $units<=300){$amt=$units*5;}
else{$amt=$units*6;}
echo "<h4>Total Amount: ".$amt."</h4>";
}
?>
</body>
</html>

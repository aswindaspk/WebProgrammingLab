<html>
<body>
<h1>Electricity Bill</h1>
<form method="post" action="#">
Consumer ID:<br><input type="number" name="id"><br>
Name:<br><input type="text" name="name"><br>
Units Consumed:<br><input type="number" name="units"><br>
<input type="Submit" name="Calculate Amount">
<input type="reset" name="Reset"><br>
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

<html>
<center>
<body bgcolor="lightBLUE">
<font color="navy blue"><h1><u> INDIAN CRICKET TEAM</u></h1></font>
<h4>PLAYERS:ROHIT SHARMA,SHUBHMAN GILL,VIRAT KOHLI,SURYAKUMAR YADAV,SREYAS IYER,SANJU SAMSON,HARDIK PANDYA,AXAR PATEL,MUHAMMED SHAMI,MOHAMMED SIRAJ,YUZI CHAHAL</h4>
<?php
$name=["ROHIT SHARMA","SHUBHMAN GILL","VIRAT KOHLI","SURYAKUMAR YADAV","SREYAS IYER","SANJU SAMSON","HARDIK PANDYA","AXAR PATEL","MUHAMMED SHAMI","MOHAMMED SIRAJ","YUZI CHAHAL"];

echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";

}
echo "</table>"
?>
</center>
</body>
</html>

<html>
<body>
<?php
$s=array("Sachin Tendulkar","Virat Kohli","Rohith sharma","M S Dhoni","Suresh Raina");
echo "<table border='1' width='90'><tr><th>Number</th><th>Name</th></tr>";
foreach($s as $k=>$v)
{
    echo  "<tr><td>$k</td><td>$v</td></tr>";
}
echo"</table>"
?>
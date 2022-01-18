<html>
	<head>
	</head>
	<body>
	    <form method="POST">
	        <table>
	            <tr>
	                <td>Enter the meter number:
	                    <input type="number" name="num1" placeholder="Enter meter number">
	                </td>
	            </tr>
	            <tr>
	                <td>Enter the number of units:
	                    <input type="number" name="unit" placeholder="Enter units">
	                </td>
	            </tr>
	            <tr>
	                <td>Enter the category:
	                    <select name="tariff">
	                        <option>Select</option>
	                        <option>Rural</option>
	                        <option>Residential</option>
	                        <option>Commercial</option>
	                    </select>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                <input type="submit" name="submit" value="submit">
	                </td>
	            </tr>
	          </table>
	</body>
	</html>
	
	
	<?php
	if(isset($_POST['submit']))
	{
	    $num1=$_POST['num1'];
	    $unit=$_POST['unit'];
	    $tariff=$_POST['tariff'];
	    if($tariff=="Rural")
	    {
	        if($unit>0&&$unit<=50)
	        {
	            $e=20;
	            $price=(($unit*.25)+$e);
	            echo "$price";
	        }
	        else if($unit>50&&$unit<=100){
	            $e=20;
	            $price=(($unit*.5)+$e);
	            echo "$price";
	        }
	        else if($unit>100&&$unit<=250){
	            $e=20;
	            $price=(($unit*.75)+$e);
	            echo "$price";
	        }
	        else if($unit>50&&$unit<=100){
	            $e=20;
	            $price=(($unit*.95)+$e);
	            echo "$price";
	        }
	        else if($unit>400){
	            $e=20;
	            $price=(($unit*1.25)+$e);
	            echo "$price";
	        }
	    echo "Your meter number is:".$num1;
	    echo "<br>";
	    echo "Units are:".$unit;
	    echo "<br>";
	    echo "Extra charges are:".$e;
	    echo "<br>";
	    echo "Total $unit units of charges:".$price;
	    echo "<br>";
	    }
	
	
	    if($tariff=="Residential")
	    {
	        if($unit>0&&$unit<=50)
	        {
	            $e=35;
	            $price=(($unit*1.35)+$e);
	            echo "$price";
	        }
	        else if($unit>50&&$unit<=100){
	            $e=35;
	            $price=(($unit*2)+$e);
	            echo "$price";
	        }
	        else if($unit>100&&$unit<=250){
	            $e=35;
	            $price=(($unit*3)+$e);
	            echo "$price";
	        }
	        else if($unit>50&&$unit<=100){
	            $e=35;
	            $price=(($unit*4)+$e);
	            echo "$price";
	        }
	        else if($unit>400){
	            $e=35;
	            $price=(($unit*6)+$e);
	            echo "$price";
	        }
	    echo "Your meter number is:".$num1;
	    echo "<br>";
	    echo "Units are:".$unit;
	    echo "<br>";
	    echo "Extra charges are:".$e;
	    echo "<br>";
	    echo "Total $unit units of charges:".$price;
	    echo "<br>";
	    }
	?>
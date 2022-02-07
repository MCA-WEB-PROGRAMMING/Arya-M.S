<?php
$conn=mysqli_connect("localhost","root","","Employee22");
if($conn)
{
    echo("successfully connected");
echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}
if(isset($_POST['submit']))
{ 
    $empid=$_POST['Emp_id'];
    $empname=$_POST['Emp_name'];
    $jobname=$_POST['Job_name'];
    $managerid=$_POST['Manager_id'];
    $salary=$_POST['Salary'];
    $number=preg_match('@[0-9]@', $salary);
    $flag=0;
if($empid==""){
echo "please fill the empid <br>";
$flag=1;
}
else{
    echo("Employee id is correct<br>");
}
if($empname=="")
{
    echo("Please fill the employee name<br>");
    $flag=1;
}
else{
    echo("Employee name is correct<br>");
}
if($jobname=="")
{
    echo("Please fill the Job name<br>");
    $flag=1;
}
else{
    echo("Job name is correct<br>");
}
if($managerid=="")
{
    echo("Please fill the Manager id<br>");
    $flag=1;
}
else{
    echo("Manager id is correct<br>");
}
if( $salary=="" ){
echo "Please fill the salary <br>";
$flag=1;
}
else{
echo "Salary correct<br>";
}
if($flag==0)
{
$query="INSERT INTO emp22(Emp_id,Emp_name,Job_name,Manager_id,Salary)VALUES('{$empid}','{$empname}','{$jobname}','{$managerid}','{$salary}')";
if(mysqli_query($conn,$query))
{
    echo("successfully inserted");
    echo "<br>";
}
else{
    echo("insertion failed");
    echo"<br>";
}
}

}
?>
<html>
<body bgcolor="pink">
<center>
<form action="" method="POST">
    <h1>EMPLOYEE DETAILS</h1>
    Emp_id:<input type="text" name="Emp_id"><br><br>
    Emp_name:<input type="text" name="Emp_name"><br><br>
    Job_name:<input type="text" name="Job_name"><br><br>
    Manager_id:<input type="text" name="Manager_id"><br><br>
    Salary:<input type="text" name="Salary"><br><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
<table border=1>
    <tr>
        <th>Emp_name</th>
        <th>Salary</th>
    </tr> 
    <?php
    $search="SELECT Emp_name,Salary FROM emp22 WHERE Salary>35000";
    $data=mysqli_query($conn,$search);
    
    
    while($res=mysqli_fetch_assoc($data))
    {?>
    <tr>
    <td>
        <?php echo $res['Emp_name'];?>
    </td>
    <td>
        <?php echo $res['Salary'];?>
    </td>
    </tr>
    
    <?php
    }
    ?>   
</center> 
</body>
</html>
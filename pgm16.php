<?php
$conn=mysqli_connect("localhost","root","","student");
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
    $username=$_POST['username'];
    $password=$_POST['password'];
    $emailid=$_POST['emailid'];
    $phonenumber=$_POST['phonenumber'];
    $uppercase=preg_match('@[A-Z]@', $password);
    $lowercase=preg_match('@[a-z]@', $password);
    $number=preg_match('@[0-9]@', $password);
    $number1=preg_match('@[0-9]@', $phonenumber);
    
$flag=0;




if($username==""){
echo "please fill the username <br>";
$flag=1;
}
if( $password=="" && strlen($password) < 8){
echo "Password should be at least 8 characters in length <br>";
$flag=1;
}
else if( !$uppercase || !$lowercase || !$number ) {
echo "password should include at least one upper case letter, one number, and one special character.<br>";
$flag=1;
}
else{
echo "Strong password.<br>";
}
if($emailid==""){
echo "please fill the email id<br>";
$flag=1;
}
if($phonenumber==""){
echo " please fill the phone number<br>";
$flag=1;
}
else if(strlen($phonenumber)<10){
echo "please fill correct phone number <br> "; 
$flag=1;
}
else{
echo "phone number is correct<br>";
}
if($flag==0)
{
$query="INSERT INTO stud(username,password,phonenumber,emailid)VALUES('{$username}','{$password}','{$phonenumber}','{$emailid}')";
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
    <h1>REGISTRATION FORM</h1>
    username:<input type="text" name="username"><br><br>
    password:<input type="password" name="password"><br><br>
    phone number:<input type="number" name="phonenumber"><br><br>
    emailid:<input type="text" name="emailid"><br><br>
    <input type="submit" name="submit">
</form>
<table border=1>
    <tr>
        <th>username</th>
        <th>password</th>
        <th>phone number</th>
        <th>email id</th>
    </tr> 
    <?php
    $search="SELECT * FROM stud";
    $data=mysqli_query($conn,$search);
    
    
    while($res=mysqli_fetch_assoc($data))
    {?>
    <tr>
    <td>
        <?php echo $res['username'];?>
    </td>
    <td>
        <?php echo $res['password'];?>
    </td>
    <td>
        <?php echo $res['phonenumber'];?>
    </td>
    <td>
        <?php echo $res['emailid'];?>
    </td>
    </tr>
    
    <?php
    }
    ?>   
</center> 
</body>
</html>

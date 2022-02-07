<?php
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
if($username==""){
echo "please fill the username <br>";
}
if( $password=="" && strlen($password) < 8){
echo "Password should be at least 8 characters in length <br>";
}
else if( !$uppercase || !$lowercase || !$number ) {
echo "password should include at least one upper case letter, one number, and one special character.<br>";
}
else{
echo "Strong password.<br>";
}
if($emailid==""){
echo "please fill the email id<br>";
}
if($phonenumber==""){
echo " please fill the phone number<br>";
}
else if(strlen($phonenumber)<10){
echo "please fill correct phone number <br> "; 
}
else{
echo "phone number is correct<br>";
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
</center> 
</body>
</html>

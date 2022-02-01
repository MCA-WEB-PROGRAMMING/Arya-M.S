<?php
$conn=mysqli_connect("localhost","root","","book");
if($conn)
{
    echo("successfully connected");
echo"<br>";
}
else{
    echo("error");
    echo"<br>";
}
if(isset($_POST['SUBMIT']))
{
    $AccessionNo=$_POST['AccessionNo'];
    $Title=$_POST['Title'];
    $Author=$_POST['Author'];
    $Edition=$_POST['Edition'];
    $Publisher=$_POST['Publisher'];
    $flag=0;
if($AccessionNo==""){
echo "please fill the Accession Number <br>";
$flag=1;
}
else{
    echo"Accession number is correct";
}
if( $Title=="" ){
echo "Please fill the Correct Title <br>";
$flag=1;
}
else{
    echo"Title is correct";
}
if($Author==""){
echo "please fill the Author name<br>";
$flag=1;
}
else{
    echo"Author Name is coorect";
}
if($Edition==""){
echo " please fill the Edition<br>";
$flag=1;
}
else{
echo "Edition is correct<br>";
}
if($Publisher=="")
{
    echo"please fill the Publisher name<br>";
}
else{
    echo"Publisher name is correct";
}
if($flag==0)
{
$query="INSERT INTO booktable(AccessionNo,Title,Author,Edition,Publisher)VALUES('{$AccessionNo}','{$Title}','{$Author}','{$Edition}','{$Publisher}')";
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
    <head>
        <style>
            body{
                padding:20px;
            }
            form{
                border:1px solid black;
                padding: 20px;
                margin:20px;
                border-radius:20px;
            }
        </style>
    </head>
<body bgcolor="pink">
<center>
<form action="" method="POST">
    <h1>REGISTRATION FORM</h1>
    Accession No:<input type="text" name="AccessionNo"><br><br>
    Title:<input type="text" name="Title"><br><br>
    Author:<input type="TEXT" name="Author"><br><br>
    Edition:<input type="text" name="Edition"><br><br>
    Publisher:<input type="text" name="Publisher"><br><br>
    <input type="submit" name="SUBMIT" value="SUBMIT">
</form>
<form action="" method="POST">
    <h1>SEARCH BOOK</h1>
Enter Title:<input type="text" name="Title"><br><br>
<input type="submit" name="SEARCH" value="SEARCH">
</form>
<?php
 if(isset($_POST['SEARCH']))
 {?>
<table border=1>
    <tr>
        <th>Accession No</th>
        <th>Title</th>
        <th>Author</th>
        <th>Edition</th>
        <th>Publisher</th>
    </tr> 
    <?php
   
        $Title=$_POST['Title'];
    $search="SELECT * FROM booktable WHERE Title='$Title'";
    $data=mysqli_query($conn,$search);
    $rows=mysqli_num_rows($data);
    if($rows>0)
    {
    while($res=mysqli_fetch_assoc($data))
    {?>
    <tr>
    <td>
        <?php echo $res['AccessionNo'];?>
    </td>
    <td>
        <?php echo $res['Title'];?>
    </td>
    <td>
        <?php echo $res['Author'];?>
    </td>
    <td>
        <?php echo $res['Edition'];?>
    </td>
    <td>
        <?php echo $res['Publisher'];?>
    </td>
    </tr>
    
    <?php
    }
    }
    else{
        echo"<tr><td>NO DATA FOUND</td></tr>";
    }
    }
    ?>   
</center> 
</body>
</html>

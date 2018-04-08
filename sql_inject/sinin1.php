<?php
include 'connection.php';

session_start();

$Fname=$_GET['Fname'];
$Password=$_GET['Password'];

//$Fname = mysqli_real_escape_string($conn, $Fname);
//$Password = mysqli_real_escape_string($conn, $Password);

$sql = "select * from users where username='$Fname' AND password='$Password';";



$c=mysqli_query($conn,$sql);
//echo($c);
$count=mysqli_num_rows($c);
echo($count);

if($count)
{
    
    $_SESSION['Fname']=$Fname;
	header("Location:/minorv2/home.php");
    echo("success");
	
}
else
{
echo("unsuccess");	
}

mysqli_close($conn);

?>
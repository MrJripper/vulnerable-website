<?php
include 'connection.php';

session_start();

$Fname=$_GET['Fname'];
$Password=$_GET['Password'];

$smt = "select * from user_data where first_name=? AND password=?";
$sqll = mysqli_prepare($conn,$smt);
mysqli_stmt_bind_param($sqll, "is", $Fname, $Password);
mysqli_stmt_execute($sqll);
$count = mysqli_stmt_fetch($sqll);

if($count)
{
    
    $_SESSION['Fname']=$Fname;
	header("Location:home.php");
    echo("success");
	
}
else
{
echo("unsuccess");	
}

mysqli_close($conn);

?>
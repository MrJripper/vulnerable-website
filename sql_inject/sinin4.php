<?php
include 'connection.php';

//session_start();

$comment=$_GET['comment'];
//$Password=$_GET['Password'];

//$Fname = mysqli_real_escape_string($conn, $Fname);
//$Password = mysqli_real_escape_string($conn, $Password);


//$sql = "INSERT INTO comments (comment) VALUES ('kartik'); DROP TABLE comments";
//$sql = "INSERT INTO comments (comment) VALUES ('kartik'); DROP TABLE comments -- ";//)"; // sql injection to drop table
//$sql = "INSERT INTO comments (comment) VALUES ('$comment')";
$sql = "INSERT INTO comments (comment) VALUES ('$comment');";
$sql .= "SELECT * FROM users";

$c=mysqli_multi_query($conn,$sql);
//$count=mysqli_num_rows($c);

if($c)
{ 
echo("success");
/*$result=mysqli_store_result($conn);
while ($row=mysqli_fetch_row($result))
        {
        printf("%s\n",$row[0]);
        }*/
}
else
{
echo("unsuccess");	
}

mysqli_close($conn);

?>
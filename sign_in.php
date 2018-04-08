<?php

require_once 'include/page.inc.php';

$user=$_GET['User'];
$Password=$_GET['Password'];

$sql = "select * from users where username='$user' AND password='$Password' ;";
$c=mysqli_query($conn,$sql);
$count=mysqli_num_rows($c);

if( $count==1 && $c ) {    // Login Successful...
		dvwaLogin( $user );
		dvwaRedirect('home.php' );
}

// Login failed
dvwaRedirect( 'login.php' );

mysqli_close($conn);

?>
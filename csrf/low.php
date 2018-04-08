<?php

require_once '../include/page.inc.php';

if( isset( $_GET[ 'Change' ] ) ) {
	// Get input
	$pass_new  = $_GET[ 'password_new' ];
	$pass_conf = $_GET[ 'password_conf' ];
	//$pass_new  = $_POST[ 'password_new' ];
	//$pass_conf = $_POST[ 'password_conf' ];

	// Do the passwords match?
	if( $pass_new == $pass_conf ) {
		
		$insert = "UPDATE `users` SET password = '$pass_new' WHERE username = '" . dvwaCurrentUser() . "';";
		
        $result = mysqli_query($conn, $insert);
        
		if($result){
			echo 'working';
		}
		// Feedback for the user
		//$html .= "<pre>Password Changed.</pre>";
	}
	else {
		// Issue with passwords matching
		echo 'not working';
		//$html .= "<pre>Passwords did not match.</pre>";
	}
	
	mysqli_close($conn);

}

?>
<?php

require_once '../include/page.inc.php';

if (isset($_SERVER['HTTP_REFERER'])) {
   $referer = $_SERVER['HTTP_REFERER'];
} else {
   $referer = '';
}

if( isset( $_GET[ 'Change' ] ) ) {
	
	// Checks to see where the request came from
	if( stripos( $referer ,$_SERVER[ 'SERVER_NAME' ]) !== false ) {
		
		// Get input
		$pass_new  = $_GET[ 'password_new' ];
		$pass_conf = $_GET[ 'password_conf' ];

		// Do the passwords match?
		if( $pass_new == $pass_conf ) {
		
			$insert = "UPDATE `users` SET password = '$pass_new' WHERE username = '" . dvwaCurrentUser() . "';";
			
			$result = mysqli_query($conn, $insert);
			
			if($result){
				echo 'working';
				}
			}
		else {
			// Issue with passwords matching
			echo 'not working';
			//$html .= "<pre>Passwords did not match.</pre>";
		}
	}
	else {
		echo 'wrong source';
	}
	
	mysqli_close($conn);
}

?>
<?php

require_once 'include/page.inc.php';

if( !dvwaIsLoggedIn() ) {	// The user shouldn't even be on this page
	// dvwaMessagePush( "You were not logged in" );
	dvwaRedirect( 'login.php' );
}

dvwaLogout();
dvwaRedirect( 'sign_in.html' );

?>

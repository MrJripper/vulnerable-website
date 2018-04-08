<?php

require_once '../include/page.inc.php';

dvwaPageStartup( array( 'authenticated') );

$vulnerabilityFile = '';

switch( $_COOKIE[ 'security' ] ) {
	case 'low':
		$vulnerabilityFile = 'low.php';
		break;
	case 'medium':
		$vulnerabilityFile = 'medium.php';
		break;
	default:
		$vulnerabilityFile = 'low.php';
		break;
}

require_once "{$vulnerabilityFile}";

$print='';

$print.= '<html>
    <head>
        <title>Vulnerability: Cross Site Request Forgery (CSRF)</title>
    </head>
    
    <body>
        <h1>Vulnerability: Cross Site Request Forgery (CSRF)</h1>
        <br />
		
		<h4 align="right"><a href ="/minorv2/home.php">HOME</a>  </h4>
		
        <h3>Change your admin password:</h3>
		<br />

		<form action="medium.php" method="GET">';

if( $vulnerabilityFile == 'impossible.php' ) {
	$print.= "
			Current password:<br />
			<input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password_current\"><br />";
}

$print.= "New password:<br />
			<input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password_new\"><br />
			Confirm new password:<br />
			<input type=\"password\" AUTOCOMPLETE=\"off\" name=\"password_conf\"><br />
			<br />
			<input type=\"submit\" value=\"Change\" name=\"Change\">";
			

if( $vulnerabilityFile == 'high.php' || $vulnerabilityFile == 'impossible.php' )
	$page[ 'body' ] .= "			" . tokenField();
            
$print.= '</form>
        </body>
        </html>';

echo ( $print);
                
?>
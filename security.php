<?php

require_once 'include/page.inc.php';

dvwaPageStartup( array( 'authenticated') );

$securityHtml = '';

if( isset( $_POST['seclev_submit'] ) ) {
	// Anti-CSRF
	checkToken( $_REQUEST[ 'user_token' ], $_SESSION[ 'session_token' ], 'security.php' );

	$securityLevel = '';
	switch( $_POST[ 'security' ] ) {
		case 'low':
			$securityLevel = 'low';
			break;
		case 'medium':
			$securityLevel = 'medium';
			break;
		default:
			$securityLevel = 'low';
			break;
	}

	dvwaSecurityLevelSet( $securityLevel );
	dvwaPageReload();
	}

$securityOptionsHtml = '';
$securityLevelHtml   = '';
foreach( array( 'low', 'medium', 'high', 'impossible' ) as $securityLevel ) {
	$selected = '';
	if( $securityLevel == dvwaSecurityLevelGet() ) {
		$selected = ' selected="selected"';
		$securityLevelHtml = "<p>Security level is currently: <em>$securityLevel</em>.<p>";
	}
	$securityOptionsHtml .= "<option value=\"{$securityLevel}\"{$selected}>" . ucfirst($securityLevel) . "</option>";
}

// Anti-CSRF
generateSessionToken();

$print='';

$print.= "

<html>

<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<title>Vulnerable Web Application</title>
	<link rel=\"stylesheet\" href=\"css/styles.css\" type=\"text/css\" />

	<meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0\" />
</head>

<body>
	<div id=\"container\">
    <header>
		<div class=\"width\">
    		<center><h1><a href=\"\">Vulnerable Web Application ( VWA )</a></h1></center>
       	</div>
    </header>

    <div id=\"body\" class=\"width\">

		<section id=\"content\">

	    <article>
				
			<h2>Security Level </h2>
			
			{$securityHtml}
			
			<form action=\"#\" method=\"POST\">
				{$securityLevelHtml}
			    <h1>MINOR BY</h1><br>
				<h3>KARTIK</h3>
				<h3>TUSHAR</h3>
				<h3>VARUN</h3>
				<h3>VATSAL</h3>
				
	</form>
        </article>
		</section>
		
        <aside class=\"sidebar\">
	
            <ul>	
               <li>
                    <h4>Categories</h4>
                    <ul>
                        <li><a href=\"home.php\">Home Page</a></li>
					</ul>
					<br />
					<ul>
					<h4>Attacks</h4>	
						<li><a href='sql_inject/sinin4.html'>SQL Injection</a></li>
						<li><a href=\"xss/index.php\">XSS</a></li>
                        <li><a href=\"csrf/index2.php\">CSRF</a></li>
                        <li><a href=\"security.php\">Difficulty Level</a></li>
                        <br />
						<li><a href=\"sign_out.php\">Logout</a></li>
                    </ul>
                </li>
                
                <li>
                   <ul>
					<h4>Solutions</h4>	
						<li><a href='sql_inject/solutioninjection.html'>SQL Injection</a></li>
						<li><a href=\"xss/xss_solution.php\">XSS</a></li>
                        <li><a href=\"csrf/index2.php\">CSRF</a></li>
                        <br>
                    </ul>
                </li>
                
                
            </ul>
		
        </aside>
    </div>
</div>
</body>
</html>";

echo($print);
htmlecho();

?>

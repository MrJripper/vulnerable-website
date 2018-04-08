<?php

require_once 'include/page.inc.php';

dvwaPageStartup( array( 'authenticated') );

$print='';

$print.= "<html>

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
    		<center><h1><a href=\"#\">Vulnerable Web Application ( VWA )</a></h1></center>
       	</div>
    </header>

    <div id=\"body\" class=\"width\">

		<section id=\"content\">

	    <article>
				
			<h2>Introduction to Vulnerable Web Application </h2>

            <p>Vulnerable Web Application (VWA) is a PHP/MySQL web application that is damn vulnerable. Its main goal is to be an aid for security professionals to test their skills and tools in a legal environment, help web developers better understand the processes of securing web applications and to aid both students & teachers to learn about web application security in a controlled class room environment.</p>	
            
            <h2>General Instructions</h2>
	<p>It is up to the user how they approach VWA. Either by working through every module at a fixed level, or selecting any module and working up to reach the highest level they can before moving onto the next one. There is not a fixed object to complete a module; however users should feel that they have successfully exploited the system as best as they possible could by using that particular vulnerability.</p>
		</article>
        </section>
        
        <aside class=\"sidebar\">
	
            <ul>	
               <li>
                    <h4>Categories</h4>
                    <ul>
                        <li><a href=\"#\">Home Page</a></li>
					</ul>
					<br />
					<ul>
					<h4>Attacks</h4>	
						<li><a href=\"sql_inject/sinin1.html\">SQL Injection</a></li>
                        <li><a href=\"xss/index.php\">XSS</a></li>
                        <li><a href=\"csrf/index.php\">CSRF</a></li>
                        <li><a href=\"security.php\">Difficulty Level</a></li>
                        <br />
						<li><a href=\"sign_out.php\">Logout</a></li>
                    </ul>
                </li>
					
                <li>
                    <ul>
					<h4>Solutions</h4>	
						<li><a href=\"sql_inject/solutioninjection1.html\">SQL Injection</a></li>
                        <li><a href=\"xss/xss_solution.php\">XSS</a></li>
                        <li><a href=\"csrf/index.php\">CSRF</a></li>
                        <br />
                    </ul>
                </li>
                
                <li>
                </li>
                
            </ul>
		
        </aside>
    	<div class=\"clear\"></div>
    </div>
</div>
</body>
</html>";

echo($print);
htmlecho();

?>
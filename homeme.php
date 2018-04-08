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
			<div class=\"article-info\">Posted on <time datetime=\"2017-10-24\">24 Oct</time> by <a href=\"#\" rel=\"author\">Anonymous</a></div>

            <p>Damn Vulnerable Web Application (DVWA) is a PHP/MySQL web application that is damn vulnerable. Its main goal is to be an aid for security professionals to test their skills and tools in a legal environment, help web developers better understand the processes of securing web applications and to aid both students & teachers to learn about web application security in a controlled class room environment.</p>	
            
            <h2>General Instructions</h2>
	<p>It is up to the user how they approach DVWA. Either by working through every module at a fixed level, or selecting any module and working up to reach the highest level they can before moving onto the next one. There is not a fixed object to complete a module; however users should feel that they have successfully exploited the system as best as they possible could by using that particular vulnerability.</p>
	<p>Please note, there are <em>both documented and undocumented vulnerability</em> with this software. This is intentional. You are encouraged to try and discover as many issues as possible.</p>

		<a href=\"#\" class=\"button\">Read more</a>
		<a href=\"#\" class=\"button\">Comments</a>
		
		</article>
	
		<article class=\"expanded\">

            		<h2>Important Note</h2>
			
            <p> By default the security has been set to easy but the user has the option to change this under the security tab in the sidebar.</p>
			<h3>Lorem lipsum</h3>

			<p>Morbi fermentum condimentum felis, commodo vestibulum sem mattis sed. Aliquam magna ante, mollis vitae tincidunt in, malesuada vitae turpis. Sed aliquam libero ut velit bibendum consectetur. Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>


		<a href=\"#\" class=\"button\">Read more</a>
		<a href=\"#\" class=\"button\">Comments</a>
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
                    <h4>About us</h4>
                    <ul>
                        <li class=\"text\">
                        	<p style=\"margin: 0;\">Aenean nec massa a tortor auctor sodales sed a dolor. Duis vitae lorem sem. Proin at velit vel arcu pretium luctus. 					<a href=\"#\" class=\"readmore\">Read More &raquo;</a></p>
                        </li>
                    </ul>
                </li>
                
                <li>
					<p> Security Level: Medium</p>
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
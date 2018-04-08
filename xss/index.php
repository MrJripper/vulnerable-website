<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xss3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['clear']))
{
	$sql = "TRUNCATE TABLE comments";
	if ($conn->query($sql) === TRUE) 
	{
		echo "Table Cleared";
	} else {
		echo "Error: Unable to Clear Table". $conn->error;
	}
}

if (isset($_POST['comment']))
{
	$sql = "INSERT INTO comments (comment)
	VALUES ('".addslashes($_POST['comment'])."')";
}

?>
<!DOCTYPE html>
<html>
<title> Minor XSS </title>
<style>
	#bord td
	{
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>
<body>
<h4 align="right"><a href ='/minorv2/home.php'>HOME</a>  </h4>
<h1 align="center"> XSS </h1>
<table align="center">
<tr><td>
<p>
<?php
if (isset($_POST['comment']))
{
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} else {
		echo "Error: Unable to add comment";
	}
}
?>
</p>
<form action="index.php" method="post">
	<textarea rows="6" cols="50" name="comment" placeholder="Leave a comment" maxlength="400"></textarea>
	<table align="center"><tr><td>
	<input type="submit" value="Comment" />
	</td></tr></table>
</form>
</td></tr>
</table>
<br />
<br />
<table align="center" id="bord">
<?php
$sql = "SELECT id, comment FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td style='width:35%;padding:10px'>Comment #".$row["id"]."<br /><hr />".$row["comment"]."<br /></td></tr>";
    }
} else {
    echo "<tr><td style='width:35%'>No Comments!</td></tr>";
}
$conn->close();
?>
</table>
<table align="center">
<tr><td>
<form action="index.php" method="post">
	 <input type="submit" name="clear" value="Clear Table" />
</form>
</td></tr>
</table>
</body>
</html> 
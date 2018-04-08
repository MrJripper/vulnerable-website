<?php
    include 'connection.php';

    if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['mail']) && isset($_GET['Password']))
    {
        $fname=$_GET['fname'];
        $lname=$_GET['lname'];
        $mail=$_GET['mail'];
        $pass=$_GET['Password'];
        
        if(!empty($fname) && !empty($lname) && !empty($mail) && !empty($pass))
        {
            $query="INSERT INTO user_data(first_name, last_name, email, password) VALUES( '$fname' , '$lname' , '$mail' , '$pass' )";
            
            $value=mysqli_query($conn, $query);
            
            if($value)
            {
                echo('success');
            }
            else
            {
                die('unsuccess');
        
            }
        }
    }
?>
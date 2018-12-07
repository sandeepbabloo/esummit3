<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
        define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 

        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $email=mysqli_real_escape_string($link,$REQUEST['email']);
        $password=mysqli_real_escape_string($link,$REQUEST['password']);
        $sql = "INSERT INTO  (email,password) VALUES ('$email,$password')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
 ?>

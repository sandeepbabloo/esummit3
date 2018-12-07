<?php
	session_start();
	define( 'DBHOST_', 'localhost' );// //give host name
    define( 'DBUSER_', 'admin' ); //give your user name
    define( 'DBPASS_', 'adminadmin2012#' ); //give your password
    define( 'DBNAME_', 'esummit_18' );  // supply your database name

    $conn = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_GET[email];


    $sql = "INSERT INTO acco_prereg (email) VALUES ('$email')";

    if(mysqli_query($conn, $sql)){

                    

    	echo '<script type="text/javascript"> alert("When we open accommodation for E-Summit 2018, then we will notify you through mail for registration.");window.location.href = "https://www.ecell.in/esummit" ;</script>);';
    }
    else{
    	$error="Error: " . $sql . "<br>" . mysqli_error($conn);
        echo '<script>alert("Unable to register.");window.history.back();</script>';
    }

mysqli_close($conn);
?>
